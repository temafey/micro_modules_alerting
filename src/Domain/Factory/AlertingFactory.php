<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Domain\Factory;

use Exception;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface;
use MicroModule\Alerting\Domain\ValueObject\EntityType;
use MicroModule\Alerting\Domain\ValueObject\EntityUuid;
use MicroModule\Alerting\Domain\ValueObject\ExceptionClass;
use MicroModule\Alerting\Domain\ValueObject\ExceptionMessage;
use MicroModule\Alerting\Domain\ValueObject\ExceptionType;
use MicroModule\Alerting\Domain\ValueObject\Id;
use MicroModule\Alerting\Domain\ValueObject\ProjectName;
use MicroModule\Base\Domain\Exception\AlertException;
use MicroModule\Base\Domain\Exception\CriticalException;
use MicroModule\Base\Domain\Exception\EmergencyException;
use MicroModule\Base\Domain\Exception\ErrorException;
use Throwable;

/**
 * Class AlertingFactory.
 *
 * @category Domain\Factory
 */
class AlertingFactory
{
    /**
     * Factory method for initialize new AlertingEntity object.
     *
     * @throws Exception
     *
     * @psalm-suppress ArgumentTypeCoercion, MoreSpecificReturnType
     */
    public function makeInstance(
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage
    ): AlertingEntity {
        $entityType = EntityType::fromNative($entityType);
        $entityUuid = EntityUuid::fromNative($entityUuid);
        $exceptionType = ExceptionType::fromNative($exceptionType);
        $exceptionClass = ExceptionClass::fromNative($exceptionClass);
        $exceptionMessage = ExceptionMessage::fromNative($exceptionMessage);
        $id = $this->generateId($projectName, $exceptionType, $exceptionClass, $exceptionMessage);
        $projectName = ProjectName::fromNative($projectName);

        return AlertingEntity::create($id, $projectName, $entityType, $entityUuid, $exceptionType, $exceptionClass, $exceptionMessage);
    }

    /**
     * Generate unique exception hash id from project name, exceptoin type, exception class and exception message.
     *
     * @psalm-suppress LessSpecificReturnStatement, MoreSpecificReturnType
     * @phan-suppress PhanPartialTypeMismatchReturn
     */
    public function generateId(
        string $projectName,
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): Id {
        return Id::fromNative(sha1($projectName . $exceptionType->toNative() . $exceptionClass->toNative() . $exceptionMessage->toNative()));
    }

    /**
     * Define exception type from exception object.
     */
    public function getExceptionType(Throwable $exception): string
    {
        switch (true) {
            case $exception instanceof EmergencyException:
                return AlertingProcessorInterface::EXCEPTION_TYPE_EMERGENCY;

            case $exception instanceof CriticalException:
                return AlertingProcessorInterface::EXCEPTION_TYPE_CRITICAL;

            case $exception instanceof AlertException:
                return AlertingProcessorInterface::EXCEPTION_TYPE_ALERT;

            case $exception instanceof ErrorException:
                return AlertingProcessorInterface::EXCEPTION_TYPE_ERROR;
        }

        return AlertingProcessorInterface::EXCEPTION_TYPE_ERROR;
    }
}
