<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Domain\Entity;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Exception;
use MicroModule\Alerting\Domain\ValueObject\AlertedAt;
use MicroModule\Alerting\Domain\ValueObject\CreatedAt;
use MicroModule\Alerting\Domain\ValueObject\EntityType;
use MicroModule\Alerting\Domain\ValueObject\EntityUuid;
use MicroModule\Alerting\Domain\ValueObject\ExceptionClass;
use MicroModule\Alerting\Domain\ValueObject\ExceptionMessage;
use MicroModule\Alerting\Domain\ValueObject\ExceptionType;
use MicroModule\Alerting\Domain\ValueObject\Id;
use MicroModule\Alerting\Domain\ValueObject\ProjectName;
use MicroModule\Alerting\Domain\ValueObject\Repetitions;
use MicroModule\Alerting\Domain\ValueObject\Status;
use MicroModule\Alerting\Domain\ValueObject\UpdatedAt;
use MicroModule\Base\Domain\Entity\SerializableInterface;
use MicroModule\ValueObject\DateTime\Exception\InvalidDateException;

/**
 * Class AlertingEntity.
 *
 * @category Domain\Entity
 */
class AlertingEntity implements SerializableInterface
{
    public const ALERT_STATUS_NEW = 0;
    public const ALERT_STATUS_PROCESSED = 1;

    /**
     * Alerting message unique identifier.
     *
     * @var Id
     */
    protected $id;

    /**
     * Entity type.
     *
     * @var EntityType
     */
    protected $entityType;

    /**
     * Entity unique identifier.
     *
     * @var EntityUuid
     */
    protected $entityUuid;

    /**
     * Project name.
     *
     * @var ProjectName
     */
    protected $projectName;

    /**
     * Exception type.
     *
     * @var ExceptionType
     */
    protected $exceptionType;

    /**
     * Exception class name.
     *
     * @var ExceptionClass
     */
    protected $exceptionClass;

    /**
     * Exception message.
     *
     * @var ExceptionMessage
     */
    protected $exceptionMessage;

    /**
     * Exception status.
     *
     * @var Status
     */
    protected $status;

    /**
     * Amount of exception repetitions.
     *
     * @var Repetitions
     */
    protected $repetitions;

    /**
     * Exception message created date.
     *
     * @var CreatedAt
     */
    protected $createdAt;

    /**
     * Exception message updated date.
     *
     * @var UpdatedAt|null
     */
    protected $updateAt;

    /**
     * Exception occurred date.
     *
     * @var AlertedAt|null
     */
    protected $alertedAt;

    /**
     * AlertingEntity constructor.
     */
    protected function __construct(
        Id $id,
        ProjectName $projectName,
        EntityType $entityType,
        EntityUuid $entityUuid,
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ) {
        $this->id = $id;
        $this->projectName = $projectName;
        $this->entityType = $entityType;
        $this->entityUuid = $entityUuid;
        $this->exceptionType = $exceptionType;
        $this->exceptionClass = $exceptionClass;
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * Create new AlertingEntity.
     *
     * @return AlertingEntity
     *
     * @throws Exception
     *
     * @psalm-suppress PropertyTypeCoercion, ArgumentTypeCoercion
     * @phan-suppress PhanPartialTypeMismatchProperty
     */
    public static function create(
        Id $id,
        ProjectName $projectName,
        EntityType $entityType,
        EntityUuid $entityUuid,
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): self {
        $alertingEntity = new self(
            $id,
            $projectName,
            $entityType,
            $entityUuid,
            $exceptionType,
            $exceptionClass,
            $exceptionMessage
        );
        $alertingEntity->createdAt = CreatedAt::now();
        $alertingEntity->repetitions = Repetitions::fromNative(1);
        $alertingEntity->setStatus(Status::fromNative(self::ALERT_STATUS_NEW));

        return $alertingEntity;
    }

    /**
     * Return alert unique id.
     */
    public function getId(): Id
    {
        return $this->id;
    }

    /**
     * Return EntityType.
     */
    public function getEntityType(): EntityType
    {
        return $this->entityType;
    }

    /**
     * Return ProjectName.
     */
    public function getProjectName(): ProjectName
    {
        return $this->projectName;
    }

    /**
     * Return ExceptionClass.
     */
    public function getExceptionClass(): ExceptionClass
    {
        return $this->exceptionClass;
    }

    /**
     * Return EntityUuid.
     */
    public function getEntityUuid(): EntityUuid
    {
        return $this->entityUuid;
    }

    /**
     * Return exceptionType.
     */
    public function getExceptionType(): ExceptionType
    {
        return $this->exceptionType;
    }

    /**
     * Set exceptionType.
     *
     * @return $this
     */
    public function setExceptionType(ExceptionType $exceptionType): self
    {
        $this->exceptionType = $exceptionType;

        return $this;
    }

    /**
     * Return ExceptionMessage.
     */
    public function getExceptionMessage(): ExceptionMessage
    {
        return $this->exceptionMessage;
    }

    /**
     * Return Status.
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @return $this
     */
    public function setStatus(Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Return Repetitions.
     */
    public function getRepetitions(): Repetitions
    {
        return $this->repetitions;
    }

    /**
     * Increment repetitions.
     *
     * @return $this
     *
     * @throws Exception
     *
     * @psalm-suppress PropertyTypeCoercion
     */
    public function increment(): self
    {
        $this->repetitions->inc();
        $this->updateAt = UpdatedAt::now();

        return $this;
    }

    /**
     * Return CreatedAt.
     */
    public function getCreatedAt(): CreatedAt
    {
        return $this->createdAt;
    }

    /**
     * Return UpdateAt.
     */
    public function getUpdateAt(): ?UpdatedAt
    {
        return $this->updateAt;
    }

    /**
     * Return AlertedAt.
     */
    public function getAlertedAt(): ?AlertedAt
    {
        return $this->alertedAt;
    }

    /**
     * Set AlertedAt.
     *
     * @return $this
     */
    public function setAlertedAt(AlertedAt $alertedAt): self
    {
        $this->alertedAt = $alertedAt;

        return $this;
    }

    /**
     * Initialize entity from data array.
     *
     * @param mixed[] $data
     *
     * @return AlertingEntity
     *
     * @throws AssertionFailedException
     * @throws InvalidDateException
     * @throws Exception
     *
     * @psalm-suppress PropertyTypeCoercion, ArgumentTypeCoercion, PossiblyInvalidPropertyAssignmentValue
     * @phan-suppress PhanPartialTypeMismatchProperty
     */
    public static function deserialize(array $data): self
    {
        Assertion::keyExists($data, 'id');
        Assertion::keyExists($data, 'projectName');
        Assertion::keyExists($data, 'entityType');
        Assertion::keyExists($data, 'entityUuid');
        Assertion::keyExists($data, 'exceptionType');
        Assertion::keyExists($data, 'exceptionClass');
        Assertion::keyExists($data, 'exceptionMessage');
        Assertion::keyExists($data, 'repetitions');
        Assertion::keyExists($data, 'status');
        Assertion::keyExists($data, 'createdAt');
        Assertion::keyExists($data, 'updatedAt');
        Assertion::keyExists($data, 'alertedAt');

        $alertingEntity = new self(
            Id::fromNative($data['id']),
            ProjectName::fromNative($data['projectName']),
            EntityType::fromNative($data['entityType']),
            EntityUuid::fromNative($data['entityUuid']),
            ExceptionType::fromNative($data['exceptionType']),
            ExceptionClass::fromNative($data['exceptionClass']),
            ExceptionMessage::fromNative($data['exceptionMessage'])
        );
        $alertingEntity->setAlertedAt($data['alertedAt']);
        $alertingEntity->setStatus(Status::fromNative($data['status']));
        $alertingEntity->repetitions = Repetitions::fromNative($data['repetitions']);
        $alertingEntity->createdAt = CreatedAt::fromNative($data['createdAt']);
        $alertingEntity->updateAt = UpdatedAt::fromNative($data['updateAt']);

        return $alertingEntity;
    }

    /**
     * Convert entity object to array.
     *
     * @return mixed[]
     *
     * @throws Exception
     *
     * @psalm-suppress PossiblyNullReference
     * @phan-suppress PhanPossiblyNonClassMethodCall
     */
    public function serialize(): array
    {
        return [
            'id' => $this->getId()->toNative(),
            'projectName' => $this->getProjectName()->toNative(),
            'entityType' => $this->getEntityType()->toNative(),
            'entityUuid' => $this->getEntityUuid()->toNative(),
            'exceptionType' => $this->getExceptionType()->toNative(),
            'exceptionClass' => $this->getExceptionClass()->toNative(),
            'exceptionMessage' => $this->getExceptionMessage()->toNative(),
            'repetitions' => $this->getRepetitions()->toNative(),
            'status' => $this->getStatus()->toNative(),
            'createdAt' => $this->getCreatedAt()->toNative(),
            'updatedAt' => ($this->updateAt) ? $this->getUpdateAt()->toNative() : null,
            'alertedAt' => ($this->alertedAt) ? $this->getAlertedAt()->toNative() : null,
        ];
    }
}
