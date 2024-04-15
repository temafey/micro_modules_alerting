<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Application\Processor;

use Enqueue\Client\CommandSubscriberInterface;
use Exception;
use Interop\Queue\Processor;
use MicroModule\Alerting\Application\Processor\AlertEventProcessor;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface;
use MicroModule\Alerting\Tests\Unit\TestCase;
use Mockery;
use Mockery\MockInterface;

/**
 * Class AlertEventConsumerTest.
 *
 * @category Tests\Unit\Infrastructure\Event\Consumer
 */
class AlertEventProcessorTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws Exception
     */
    public function processTest(string $id): void
    {
        $entityMock = Mockery::mock(AlertingEntity::class);
        $alertingProcessorMock = $this->makeAlertingProcessorMock($entityMock);
        $alertingRepositoryMock = $this->makeAlertingRepositoryMock($entityMock);
        $alertEventConsumer = new AlertEventProcessor($alertingProcessorMock, $alertingRepositoryMock);

        self::assertInstanceOf(Processor::class, $alertEventConsumer);
        self::assertInstanceOf(CommandSubscriberInterface::class, $alertEventConsumer);

        $loggerMock = $this->createLoggerMock(['debug' => 1, 'warning' => 0]);
        $alertEventConsumer->setLogger($loggerMock);

        $messageMock = $this->createEnqueueMessageMock($id);
        $contextMock = $this->createEnqueueContextMock();

        self::assertSame(Processor::ACK, $alertEventConsumer->process($messageMock, $contextMock));
    }

    /**
     * Make and return AlertingProcessor mock object.
     *
     * @return MockInterface|AlertingProcessorInterface
     */
    private function makeAlertingProcessorMock(MockInterface $entityMock): MockInterface
    {
        $alertingProcessorMock = Mockery::mock(AlertingProcessorInterface::class);
        $alertingProcessorMock
            ->shouldReceive('handleAlert')
            ->times(1)
            ->with($entityMock);

        return $alertingProcessorMock;
    }

    /**
     * Make and return AlertingRepository mock object.
     *
     * @return MockInterface|AlertingRepositoryInterface
     */
    private function makeAlertingRepositoryMock(MockInterface $entityMock): MockInterface
    {
        $alertingRepositoryMock = Mockery::mock(AlertingRepositoryInterface::class);
        $alertingRepositoryMock
            ->shouldReceive('getById')
            ->times(1)
            ->andReturn($entityMock);

        return $alertingRepositoryMock;
    }
}
