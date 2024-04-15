<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Infrastructure\Repository;

use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Exception\StorageException;
use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface;
use MicroModule\Alerting\Domain\Repository\StorageRepositoryInterface;
use MicroModule\Alerting\Infrastructure\Repository\AlertingRepository;
use MicroModule\Alerting\Tests\Unit\TestCase;
use MicroModule\Base\Domain\Exception\InvalidDataException;
use MicroModule\Base\Domain\Service\SerializableServiceInterface;
use Mockery;

/**
 * Class AlertingRepositoryTest.
 *
 * @category Tests\Unit\Infrastructure\Event\Consumer
 */
class AlertingRepositoryTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Repository\AlertingRepository::get
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws InvalidDataException
     */
    public function getTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage,
        string $serializableAlerting
    ): void {
        $entityMock = Mockery::mock(AlertingEntity::class);

        $storageRepositoryMock = Mockery::mock(StorageRepositoryInterface::class);
        $storageRepositoryMock
            ->shouldReceive('get')
            ->times(1)
            ->andReturn($serializableAlerting);

        $alertingFactoryMock = Mockery::mock(AlertingFactory::class);
        $alertingFactoryMock
            ->shouldReceive('generateId')
            ->times(1)
            ->andReturn($this->createStringLiteralMock($id, 1));

        $serializableServiceMock = Mockery::mock(SerializableServiceInterface::class);
        $serializableServiceMock
            ->shouldReceive('deserialize')
            ->times(1)
            ->andReturn($entityMock);

        $alertingRepository = new AlertingRepository($projectName, $storageRepositoryMock, $alertingFactoryMock, $serializableServiceMock);
        self::assertInstanceOf(AlertingRepositoryInterface::class, $alertingRepository);

        $exceptionTypeValueObject = $this->createStringLiteralMock($exceptionType);
        $exceptionClassValueObject = $this->createStringLiteralMock($exceptionClass);
        $exceptionMessageValueObject = $this->createStringLiteralMock($exceptionMessage);
        $alertingEntity = $alertingRepository->get($exceptionTypeValueObject, $exceptionClassValueObject, $exceptionMessageValueObject);

        self::assertEquals($entityMock, $alertingEntity);
    }

    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Repository\AlertingRepository::getById
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws InvalidDataException
     */
    public function getByIdTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage,
        string $serializableAlerting
    ): void {
        $entityMock = Mockery::mock(AlertingEntity::class);

        $storageRepositoryMock = Mockery::mock(StorageRepositoryInterface::class);
        $storageRepositoryMock
            ->shouldReceive('get')
            ->times(1)
            ->andReturn($serializableAlerting);

        $alertingFactoryMock = Mockery::mock(AlertingFactory::class);
        $serializableServiceMock = Mockery::mock(SerializableServiceInterface::class);
        $serializableServiceMock
            ->shouldReceive('deserialize')
            ->times(1)
            ->andReturn($entityMock);

        $alertingRepository = new AlertingRepository($projectName, $storageRepositoryMock, $alertingFactoryMock, $serializableServiceMock);
        self::assertInstanceOf(AlertingRepositoryInterface::class, $alertingRepository);

        $alertingEntity = $alertingRepository->getById($this->createStringLiteralMock($id, 1));

        self::assertEquals($entityMock, $alertingEntity);
    }

    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Repository\AlertingRepository::exists
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     */
    public function existsTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage,
        string $serializableAlerting
    ): void {
        $storageRepositoryMock = Mockery::mock(StorageRepositoryInterface::class);
        $storageRepositoryMock
            ->shouldReceive('get')
            ->times(1)
            ->andReturn($serializableAlerting);

        $alertingFactoryMock = Mockery::mock(AlertingFactory::class);
        $alertingFactoryMock
            ->shouldReceive('generateId')
            ->times(1)
            ->andReturn($this->createStringLiteralMock($id, 1));

        $serializableServiceMock = Mockery::mock(SerializableServiceInterface::class);

        $alertingRepository = new AlertingRepository($projectName, $storageRepositoryMock, $alertingFactoryMock, $serializableServiceMock);
        self::assertInstanceOf(AlertingRepositoryInterface::class, $alertingRepository);

        $exceptionTypeValueObject = $this->createStringLiteralMock($exceptionType);
        $exceptionClassValueObject = $this->createStringLiteralMock($exceptionClass);
        $exceptionMessageValueObject = $this->createStringLiteralMock($exceptionMessage);

        self::assertTrue($alertingRepository->exists($exceptionTypeValueObject, $exceptionClassValueObject, $exceptionMessageValueObject));
    }

    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Repository\AlertingRepository::store
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws StorageException
     */
    public function storeTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage,
        string $serializableAlerting
    ): void {
        $entityMock = Mockery::mock(AlertingEntity::class);
        $entityMock
            ->shouldReceive('getId')
            ->times(2)
            ->andReturn($this->createStringLiteralMock($id, 2));
        $entityMock
            ->shouldReceive('increment')
            ->times(1);

        $storageRepositoryMock = Mockery::mock(StorageRepositoryInterface::class);
        $storageRepositoryMock
            ->shouldReceive('get')
            ->times(1)
            ->andReturn($serializableAlerting);
        $storageRepositoryMock
            ->shouldReceive('set')
            ->times(1)
            ->andReturn(true);
        $storageRepositoryMock
            ->shouldReceive('save')
            ->times(1)
            ->andReturn(true);

        $alertingFactoryMock = Mockery::mock(AlertingFactory::class);

        $serializableServiceMock = Mockery::mock(SerializableServiceInterface::class);
        $serializableServiceMock
            ->shouldReceive('serialize')
            ->times(1)
            ->andReturn(unserialize($serializableAlerting));
        $serializableServiceMock
            ->shouldReceive('deserialize')
            ->times(1)
            ->andReturn($entityMock);

        $alertingRepository = new AlertingRepository($projectName, $storageRepositoryMock, $alertingFactoryMock, $serializableServiceMock);
        self::assertInstanceOf(AlertingRepositoryInterface::class, $alertingRepository);
        self::assertSame($id, $alertingRepository->store($entityMock));
    }
}
