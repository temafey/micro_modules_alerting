<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Repository\Processor;

use BadMethodCallException;
use DateTime;
use Exception;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface;
use MicroModule\Alerting\Domain\Repository\Query\AlertingQueryRepositoryInterface;
use MicroModule\Alerting\Domain\ValueObject\AlertedAt;
use MicroModule\Alerting\Domain\ValueObject\Status;

/**
 * Class AlertingProcessor.
 *
 * @SuppressWarnings(PHPMD)
 */
class AlertingProcessor implements AlertingProcessorInterface
{
    /**
     * Read model repository.
     *
     * @var AlertingQueryRepositoryInterface
     */
    protected $alertaRequestRepository;

    /**
     * Write model repository.
     *
     * @var AlertingRepositoryInterface
     */
    protected $alertingRepository;

    /**
     * Minimum time before alerting in seconds.
     *
     * @var int
     */
    protected $alertingDelayTime;

    /**
     * AlertingProcessor constructor.
     */
    public function __construct(
        AlertingQueryRepositoryInterface $alertaRequestRepository,
        AlertingRepositoryInterface $alertingRepository,
        int $alertingDelayTime
    ) {
        $this->alertaRequestRepository = $alertaRequestRepository;
        $this->alertingRepository = $alertingRepository;
        $this->alertingDelayTime = $alertingDelayTime;
    }

    /**
     * Handle alert.
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function handleAlert(AlertingEntity $alertingEntity): bool
    {
        if (!$this->isNeedToProcessAlert($alertingEntity)) {
            return false;
        }
        $exceptionType = $alertingEntity->getExceptionType()->toNative();
        $method = $this->getHandleMethod($exceptionType);

        if (!method_exists($this, $method)) {
            throw new BadMethodCallException(sprintf("No handle method '%s' for alert '%s'.", $method, $exceptionType));
        }
        $result = $this->$method($alertingEntity);

        if ($result) {
            $alertingEntity->setAlertedAt(AlertedAt::now());
            $alertingEntity->setStatus(Status::fromNative(AlertingEntity::ALERT_STATUS_PROCESSED));
            $this->alertingRepository->store($alertingEntity);
        }

        return true;
    }

    /**
     * Check alert status and when the last alerting was sent.
     *
     * @throws Exception
     */
    protected function isNeedToProcessAlert(AlertingEntity $alertingEntity): bool
    {
        if (AlertingEntity::ALERT_STATUS_NEW === $alertingEntity->getStatus()->toNative()) {
            return true;
        }
        $updatedAt = $alertingEntity->getUpdateAt();
        $alertedAt = $alertingEntity->getAlertedAt();

        if (null === $alertedAt || null === $updatedAt) {
            return false;
        }

        if ($alertedAt->toNative()->getTimestamp() > $updatedAt->toNative()->getTimestamp()) {
            return false;
        }
        $nowDateTime = new DateTime('now');

        return !(($alertedAt->toNative()->getTimestamp() - $nowDateTime->getTimestamp()) < $this->alertingDelayTime);
    }

    /**
     * Return handle alert method name.
     */
    protected function getHandleMethod(string $exceptionType): string
    {
        return 'handle' . ucfirst(strtolower($exceptionType)) . 'Alert';
    }

    /**
     * Handle emergency level alert.
     */
    protected function handleEmergencyAlert(AlertingEntity $alertingEntity): bool
    {
        $exceptionMessage = $alertingEntity->getExceptionMessage()->toNative();

        return $this->alertaRequestRepository->sendAlert($exceptionMessage);
    }

    /**
     * Handle critical level alert.
     */
    protected function handleCriticalAlert(AlertingEntity $alertingEntity): bool
    {
        $exceptionMessage = $alertingEntity->getExceptionMessage()->toNative();

        return $this->alertaRequestRepository->sendAlert($exceptionMessage);
    }

    /**
     * Handle alert level alert.
     */
    protected function handleAlertAlert(AlertingEntity $alertingEntity): bool
    {
        $repetitions = $alertingEntity->getRepetitions()->toNative();

        if ($repetitions > AlertingProcessorInterface::EXCEPTION_EMERGENCY_ALERT_REPETITIONS) {
            return $this->handleEmergencyAlert($alertingEntity);
        }

        if ($repetitions > AlertingProcessorInterface::EXCEPTION_CRITICAL_ALERT_REPETITIONS) {
            return $this->handleCriticalAlert($alertingEntity);
        }

        return false;
    }

    /**
     * Handle error level alert.
     */
    protected function handleErrorAlert(AlertingEntity $alertingEntity): bool
    {
        $repetitions = $alertingEntity->getRepetitions()->toNative();

        if ($repetitions > AlertingProcessorInterface::EXCEPTION_EMERGENCY_ERROR_REPETITIONS) {
            return $this->handleEmergencyAlert($alertingEntity);
        }

        if ($repetitions > AlertingProcessorInterface::EXCEPTION_CRITICAL_ERROR_REPETITIONS) {
            return $this->handleCriticalAlert($alertingEntity);
        }

        return false;
    }
}
