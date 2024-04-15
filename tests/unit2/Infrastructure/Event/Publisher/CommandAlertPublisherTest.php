<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Infrastructure\Event\Publisher;

use League\Event\AbstractListener;
use League\Tactician\CommandEvents\Event\CommandFailed;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Exception\EventListenerException;
use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Infrastructure\Event\Publisher\CommandAlertPublisher;
use MicroModule\Alerting\Tests\Unit\TestCase;
use MicroModule\Base\Domain\Command\CommandInterface;
use MicroModule\Base\Domain\Exception\ErrorException;
use Mockery;
use Mockery\MockInterface;
use Throwable;

/**
 * Class CommandAlertPublisherTest.
 *
 * @category Tests\Unit\Infrastructure\Event\Publisher
 */
class CommandAlertPublisherTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Event\Publisher\CommandAlertPublisher::handle
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws EventListenerException
     * @throws Throwable
     */
    public function handleTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType
    ): void {
        $entityMock = $this->makeAlertingEntityMock($id);
        $alertingFactoryMock = $this->makeAlertingFactoryMock($entityMock, $exceptionType);
        $alertingProducerMock = $this->makeAlertingProducerMock();
        $alertingRepositoryMock = $this->makeAlertingRepositoryMock($entityMock);
        $alertEventPublisher = new CommandAlertPublisher($projectName, $alertingFactoryMock, $alertingRepositoryMock, $alertingProducerMock);
        self::assertInstanceOf(AbstractListener::class, $alertEventPublisher);

        $loggerMock = $this->createLoggerMock(['debug' => 0, 'warning' => 0]);
        $alertEventPublisher->setLogger($loggerMock);
        $commandMock = $this->makeCommandMock($entityUuid);
        $eventMock = $this->makeCommandFailedEventMock($commandMock);
        $alertEventPublisher->handle($eventMock);
    }

    /**
     * Make and return AlertingEntity mock object.
     */
    private function makeAlertingEntityMock(string $id): MockInterface
    {
        $entityMock = Mockery::mock(AlertingEntity::class);
        $entityMock
            ->shouldReceive('getId')
            ->times(1)
            ->andReturn($this->createStringLiteralMock($id, 1));

        return $entityMock;
    }

    /**
     * Make and return HttpResponse mock object.
     */
    private function makeAlertingFactoryMock(MockInterface $entityMock, string $exceptionType): MockInterface
    {
        $alertingFactoryMock = Mockery::mock(AlertingFactory::class);
        $alertingFactoryMock
            ->shouldReceive('getExceptionType')
            ->times(1)
            ->andReturn($this->createStringLiteralMock($exceptionType));
        $alertingFactoryMock
            ->shouldReceive('makeInstance')
            ->times(1)
            ->andReturn($entityMock);

        return $alertingFactoryMock;
    }

    /**
     * Make and return AlertingProducer mock object.
     */
    private function makeAlertingProducerMock(): MockInterface
    {
        $alertingProducerMock = $this->createProducerMock();
        $alertingProducerMock
            ->shouldReceive('sendCommand')
            ->times(1);

        return $alertingProducerMock;
    }

    /**
     * Make and return AlertingRepository mock object.
     */
    private function makeAlertingRepositoryMock(MockInterface $entityMock): MockInterface
    {
        $alertingRepositoryMock = Mockery::mock(AlertingRepositoryInterface::class);
        $alertingRepositoryMock
            ->shouldReceive('getById')
            ->times(0)
            ->andReturn($entityMock);
        $alertingRepositoryMock
            ->shouldReceive('store')
            ->times(1);

        return $alertingRepositoryMock;
    }

    /**
     * Make and return Command mock object.
     */
    private function makeCommandMock(string $entityUuid): MockInterface
    {
        $commandMock = Mockery::mock(CommandInterface::class);
        $commandMock
            ->shouldReceive('getUuid')
            ->times(1)
            ->andReturn($this->createUuidMock($entityUuid, 1));

        return $commandMock;
    }

    /**
     * Make and return CommandFailedEvent mock object.
     */
    private function makeCommandFailedEventMock(MockInterface $commandMock): MockInterface
    {
        $eventMock = Mockery::mock(CommandFailed::class);
        $eventMock
            ->shouldReceive('getCommand')
            ->times(1)
            ->andReturn($commandMock);
        $eventMock
            ->shouldReceive('getException')
            ->times(1)
            ->andReturn(Mockery::mock(ErrorException::class));

        return $eventMock;
    }
}
