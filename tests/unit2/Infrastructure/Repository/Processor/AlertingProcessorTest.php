<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Infrastructure\Repository\Processor;

use Exception;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface;
use MicroModule\Alerting\Domain\Repository\Query\AlertingQueryRepositoryInterface;
use MicroModule\Alerting\Infrastructure\Repository\Processor\AlertingProcessor;
use MicroModule\Alerting\Tests\Unit\TestCase;
use Mockery;
use Mockery\MockInterface;

/**
 * Class AlertingProcessorTest.
 *
 * @category Tests\Unit\Infrastructure\Event\Consumer
 */
class AlertingProcessorTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Repository\Processor\AlertingProcessor::handleAlert
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @param mixed[] $calledTimes
     *
     * @throws Exception
     */
    public function handleAlertTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage,
        string $serializable,
        int $repetitions,
        int $status,
        string $createdAt,
        string $updatedAt,
        string $alertedAt,
        array $calledTimes
    ): void {
        $entityMock = $this->createAlertingEntityMock(
            $id,
            $projectName,
            $entityType,
            $entityUuid,
            $exceptionType,
            $exceptionClass,
            $exceptionMessage,
            $repetitions,
            $status,
            $createdAt,
            $updatedAt,
            $alertedAt,
            $calledTimes
        );

        $alertingQueryRepositoryMock = $this->makeAlertingQueryRepositoryMock($calledTimes['sendAlert']);
        $alertingRepositoryMock = $this->makeAlertingRepositoryMock($calledTimes['store']);
        $alertingProcessor = new AlertingProcessor($alertingQueryRepositoryMock, $alertingRepositoryMock, 10);

        self::assertInstanceOf(AlertingProcessorInterface::class, $alertingProcessor);
        self::assertTrue($alertingProcessor->handleAlert($entityMock));
    }

    /**
     * Return AlertingQueryRepositoryInterface mock object.
     */
    private function makeAlertingQueryRepositoryMock(int $times): MockInterface
    {
        $alertingQueryRepositoryMock = Mockery::mock(AlertingQueryRepositoryInterface::class);
        $alertingQueryRepositoryMock
            ->shouldReceive('sendAlert')
            ->times($times)
            ->andReturn(true);

        return $alertingQueryRepositoryMock;
    }

    /**
     * Return AlertingRepository mock object.
     */
    private function makeAlertingRepositoryMock(int $times): MockInterface
    {
        $alertingRepositoryMock = Mockery::mock(AlertingRepositoryInterface::class);
        $alertingRepositoryMock
            ->shouldReceive('store')
            ->times($times)
            ->andReturn(true);

        return $alertingRepositoryMock;
    }
}
