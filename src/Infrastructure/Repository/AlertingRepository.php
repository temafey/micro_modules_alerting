<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Repository;

use Exception;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Exception\StorageException;
use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\StorageRepositoryInterface;
use MicroModule\Alerting\Domain\ValueObject\ExceptionClass;
use MicroModule\Alerting\Domain\ValueObject\ExceptionMessage;
use MicroModule\Alerting\Domain\ValueObject\ExceptionType;
use MicroModule\Alerting\Domain\ValueObject\Id;
use MicroModule\Base\Domain\Exception\InvalidDataException;
use MicroModule\Base\Domain\Exception\SerializationException;
use MicroModule\Base\Domain\Service\SerializableServiceInterface;

/**
 * Class AlertingRepository.
 *
 * @category Infrastructure\Repository
 */
class AlertingRepository implements AlertingRepositoryInterface
{
    /**
     * Project name.
     *
     * @var string
     */
    protected $projectName;

    /**
     * StorageRepositoryInterface client.
     *
     * @var StorageRepositoryInterface
     */
    protected $storage;

    /**
     * Alerting entity factory.
     *
     * @var AlertingFactory
     */
    protected $alertingFactory;

    /**
     * Contract for objects serializable by the SerializableDto.
     *
     * @var SerializableServiceInterface
     */
    protected $serializableService;

    /**
     * AlertingRepository constructor.
     */
    public function __construct(
        string $projectName,
        StorageRepositoryInterface $storage,
        AlertingFactory $alertingFactory,
        SerializableServiceInterface $serializableService
    ) {
        $this->projectName = $projectName;
        $this->storage = $storage;
        $this->alertingFactory = $alertingFactory;
        $this->serializableService = $serializableService;
    }

    /**
     * Find and return entity exception from storage.
     *
     * @throws InvalidDataException
     */
    public function get(
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): AlertingEntity {
        $data = $this->findOne($exceptionType, $exceptionClass, $exceptionMessage);

        if (!$data) {
            throw new InvalidDataException('Data not found in storage by entity type and uuid!');
        }

        return $this->normalizeDataToEntity($data);
    }

    /**
     * Find and return alert entity from storage by alert id.
     *
     * @throws InvalidDataException
     */
    public function getById(Id $alertingId): AlertingEntity
    {
        $data = $this->storage->get($alertingId->toNative());

        if (false === $data) {
            throw new InvalidDataException('Data not found in storage by alert unique id!');
        }
        /* @psalm-suppress PossiblyInvalidArgument */
        return $this->normalizeDataToEntity($data);
    }

    /**
     * Convert serialized string of data to entity object.
     *
     * @throws SerializationException
     */
    protected function normalizeDataToEntity(string $data): AlertingEntity
    {
        $data = unserialize($data);
        $alertingEntity = $this->serializableService->deserialize($data);

        if (!$alertingEntity instanceof AlertingEntity) {
            throw new SerializationException('Object should be instance of AlertingEntity!');
        }

        return $alertingEntity;
    }

    /**
     * Check if alert entity exists in storage.
     */
    public function exists(
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): bool {
        return (bool) $this->findOne($exceptionType, $exceptionClass, $exceptionMessage);
    }

    /**
     * Save AlertingEntity to storage, if Alerting already exists increment repetitions.
     *
     * @throws StorageException
     * @throws Exception
     */
    public function store(AlertingEntity $alertingEntity): string
    {
        $alertingId = $alertingEntity->getId()->toNative();
        $data = $this->storage->get($alertingEntity->getId()->toNative());

        if ($data) {
            $alertingEntity = $this->normalizeDataToEntity($data);
            $alertingEntity->increment();
        }

        if (false === $this->save($alertingId, $alertingEntity)) {
            throw new StorageException('Alert was not saved in storage');
        }

        return $alertingId;
    }

    /**
     * Find entity row in storage by entity type and entity uuid.
     *
     * @psalm-suppress InvalidReturnType
     */
    protected function findOne(
        ExceptionType $exceptionType,
        ExceptionClass $exceptionClass,
        ExceptionMessage $exceptionMessage
    ): ?string {
        $alertingId = $this->alertingFactory->generateId($this->projectName, $exceptionType, $exceptionClass, $exceptionMessage);
        $result = $this->storage->get($alertingId->toNative());

        if (false === $result) {
            return null;
        }

        return $result;
    }

    /**
     * Save alerting exception to storage.
     */
    protected function save(string $alertingId, AlertingEntity $entity): bool
    {
        $data = $this->serializableService->serialize($entity);
        $this->storage->set($alertingId, serialize($data));

        return $this->storage->save();
    }
}
