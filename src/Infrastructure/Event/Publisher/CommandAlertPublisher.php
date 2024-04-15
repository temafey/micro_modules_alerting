<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Event\Publisher;

use Enqueue\Client\ProducerInterface;
use League\Event\AbstractListener;
use League\Event\EventInterface;
use League\Tactician\CommandEvents\Event\CommandFailed;
use MicroModule\Alerting\Application\Processor\AlertEventProcessor;
use MicroModule\Alerting\Domain\Exception\EventListenerException;
use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Base\Domain\Command\CommandInterface;
use MicroModule\Base\Utils\LoggerTrait;
use MicroModule\ValueObject\StringLiteral\StringLiteral;
use Throwable;

/**
 * Class CommandAlertPublisher.
 *
 * @category Domain\Event\Publisher
 *
 * @SuppressWarnings(PHPMD)
 */
class CommandAlertPublisher extends AbstractListener
{
    use LoggerTrait;

    /**
     * Project name.
     *
     * @var string
     */
    protected $projectName;

    /**
     * Send alert message to alerting service.
     *
     * @var ProducerInterface
     */
    protected $queueProducer;

    /**
     * Alert entity factory.
     *
     * @var AlertingFactory
     */
    protected $alertingFactory;

    /**
     * Alerting storage repository.
     *
     * @var AlertingRepositoryInterface
     */
    protected $alertingRepository;

    /**
     * CommandAlertPublisher constructor.
     */
    public function __construct(
        string $projectName,
        AlertingFactory $alertingFactory,
        AlertingRepositoryInterface $alertingRepository,
        ProducerInterface $queueProducer
    ) {
        $this->projectName = $projectName;
        $this->alertingFactory = $alertingFactory;
        $this->alertingRepository = $alertingRepository;
        $this->queueProducer = $queueProducer;
    }

    /**
     * Handle an event.
     *
     * @throws EventListenerException
     * @throws Throwable
     */
    public function handle(EventInterface $event): void
    {
        if (!$event instanceof CommandFailed) {
            throw new EventListenerException('Event not instance of ' . CommandFailed::class);
        }
        $command = $event->getCommand();

        if (!$command instanceof CommandInterface) {
            throw new EventListenerException('Command not instance of ' . CommandInterface::class);
        }
        $alertId = $this->save($command, $event->getException());
        $this->produce($alertId);
    }

    /**
     * Initialize and save alert entity.
     *
     * @throws Throwable
     */
    protected function save(CommandInterface $command, Throwable $exception): StringLiteral
    {
        $entityId = $command->getUuid();
        $entityType = get_class($command);
        $exceptionType = $this->alertingFactory->getExceptionType($exception);
        $exceptionMessage = $this->getExceptionMessage($exception);
        $alertingEntity = $this->alertingFactory->makeInstance($this->projectName, $entityType, $entityId->toString(), $exceptionType, get_class($exception), $exceptionMessage);
        $this->alertingRepository->store($alertingEntity);

        return $alertingEntity->getId();
    }

    /**
     * Send alert id to queue.
     */
    protected function produce(StringLiteral $alertId): void
    {
        $this->queueProducer->sendCommand(AlertEventProcessor::QUEUE_COMMAND_FAILED_ALERT, $alertId->toNative());
    }
}
