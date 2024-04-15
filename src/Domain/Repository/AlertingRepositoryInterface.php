<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Domain\Repository;

use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\ValueObject\ExceptionClass;
use MicroModule\Alerting\Domain\ValueObject\ExceptionMessage;
use MicroModule\Alerting\Domain\ValueObject\ExceptionType;
use MicroModule\Alerting\Domain\ValueObject\Id;
use MicroModule\Base\Domain\Exception\InvalidDataException;

/**
 * Interface AlertingRepositoryInterface.
 *
 * @category Domain\Repository
 */
interface AlertingRepositoryInterface
{
    /**
     * Find and return entity exception from storage.
     *
     * @throws InvalidDataException
     */
    public function get(
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): AlertingEntity;

    /**
     * Find and return alert entity from storage by alert id.
     */
    public function getById(Id $alertingId): AlertingEntity;

    /**
     * Check if alert entity exists in storage.
     */
    public function exists(
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): bool;

    /**
     * Save AlertingEntity last uncommitted events.
     */
    public function store(AlertingEntity $alertingEntity): string;
}
