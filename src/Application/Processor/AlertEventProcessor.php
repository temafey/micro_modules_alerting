<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Application\Processor;

use Enqueue\Client\CommandSubscriberInterface;
use Exception;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface;
use MicroModule\Alerting\Domain\ValueObject\Id;
use MicroModule\Base\Utils\LoggerTrait;
use Throwable;

/**
 * Class AlertEventConsumer.
 *
 * @category Domain\Event\Consumer
 */
class AlertEventProcessor implements Processor, CommandSubscriberInterface
{
    use LoggerTrait;

    public const QUEUE_COMMAND_FAILED_ALERT = 'log.command.failed.alert';

    /**
     * AlertEventConsumer constructor.
     */
    public function __construct(
        protected AlertingProcessorInterface $alertingProcessor,
        protected AlertingRepositoryInterface $alertingRepository)
    {

    }

    /**
     * Process enqueue message.
     *
     * @return object|string
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     * @phan-suppress PhanUnusedPublicMethodParameter
     */
    public function process(Message $message, Context $context)
    {
        $this->logMessage('Consume alert event', LOG_DEBUG);
        $alertId = $message->getBody();

        try {
            $alertEntity = $this->alertingRepository->getById(Id::fromNative($alertId));
            $this->alertingProcessor->handleAlert($alertEntity);
        } catch (Throwable $exception) {
            $this->logMessage(sprintf('Consume error event with Exception: %s, %s', get_class($exception), $exception->getMessage()), LOG_DEBUG);
        }

        return self::ACK;
    }

    /**
     * Return enqueue command routers.
     */
    public static function getSubscribedCommand(): string
    {
        return self::QUEUE_COMMAND_FAILED_ALERT;
    }
}
