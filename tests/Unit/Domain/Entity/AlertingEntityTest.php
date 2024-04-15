<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\Entity;

use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Native\DateTimeMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Ramsey\UuidMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class AlertingEntity
 *
 * @class AlertingEntityTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\Entity
 */
class AlertingEntityTest extends UnitTestCase
{
	use ValueObjectMockHelper, UuidMockHelper, DateTimeMockHelper, ValueObjectMockHelper;

    /**
     * Test for "Create new AlertingEntity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::create
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForCreateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function createShouldInitializeAndReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = AlertingEntity::create($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $test);
    }

    /**
     * Test for "Return alert unique id".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getId
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetIdMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getIdShouldReturnIdTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getId();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\Id::class, $result);
    }

    /**
     * Test for "Return EntityType".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getEntityType
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetEntityTypeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getEntityTypeShouldReturnEntityTypeTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getEntityType();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\EntityType::class, $result);
    }

    /**
     * Test for "Return ProjectName".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getProjectName
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetProjectNameMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getProjectNameShouldReturnProjectNameTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getProjectName();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\ProjectName::class, $result);
    }

    /**
     * Test for "Return ExceptionClass".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getExceptionClass
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetExceptionClassMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionClassShouldReturnExceptionClassTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getExceptionClass();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\ExceptionClass::class, $result);
    }

    /**
     * Test for "Return EntityUuid".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getEntityUuid
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetEntityUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getEntityUuidShouldReturnEntityUuidTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getEntityUuid();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\EntityUuid::class, $result);
    }

    /**
     * Test for "Return exceptionType".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getExceptionType
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetExceptionTypeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionTypeShouldReturnExceptionTypeTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getExceptionType();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\ExceptionType::class, $result);
    }

    /**
     * Test for "Set exceptionType".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::setExceptionType
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForSetExceptionTypeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function setExceptionTypeShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        $domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
        $result = $test->setExceptionType($domainValueObjectExceptionTypeMock);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $result);
    }

    /**
     * Test for "Return ExceptionMessage".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getExceptionMessage
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetExceptionMessageMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionMessageShouldReturnExceptionMessageTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getExceptionMessage();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::class, $result);
    }

    /**
     * Test for "Return Status".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getStatus
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetStatusMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getStatusShouldReturnStatusTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getStatus();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\Status::class, $result);
    }

    /**
     * Test for "Set status".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::setStatus
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForSetStatusMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function setStatusShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        $domainValueObjectStatusMock = $this->createDomainValueObjectStatusMock($mockArgs['Status'], $mockTimes['Status']);
        $result = $test->setStatus($domainValueObjectStatusMock);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $result);
    }

    /**
     * Test for "Return Repetitions".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getRepetitions
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetRepetitionsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getRepetitionsShouldReturnRepetitionsTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getRepetitions();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\Repetitions::class, $result);
    }

    /**
     * Test for "Increment repetitions".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::increment
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForIncrementMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function incrementShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->increment();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $result);
    }

    /**
     * Test for "Return CreatedAt".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getCreatedAt
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetCreatedAtMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getCreatedAtShouldReturnCreatedAtTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getCreatedAt();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\CreatedAt::class, $result);
    }

    /**
     * Test for "Return UpdateAt".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getUpdateAt
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetUpdateAtMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getUpdateAtShouldReturnUpdatedAtTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getUpdateAt();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\UpdatedAt::class, $result);
    }

    /**
     * Test for "Return AlertedAt".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::getAlertedAt
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForGetAlertedAtMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getAlertedAtShouldReturnAlertedAtTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->getAlertedAt();
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\AlertedAt::class, $result);
    }

    /**
     * Test for "Set AlertedAt".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::setAlertedAt
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForSetAlertedAtMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function setAlertedAtShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        $domainValueObjectAlertedAtMock = $this->createDomainValueObjectAlertedAtMock($mockArgs['AlertedAt'], $mockTimes['AlertedAt']);
        $result = $test->setAlertedAt($domainValueObjectAlertedAtMock);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $result);
    }

    /**
     * Test for "Initialize entity from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::deserialize
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function deserializeShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        $data = $mockArgs['data'];
        $test = AlertingEntity::deserialize($data);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $test);
    }

    /**
     * Test for "Convert entity object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Entity\AlertingEntity::serialize
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Entity\AlertingEntityDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function serializeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
		$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['ProjectName'], $mockTimes['ProjectName']);
		$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['EntityType'], $mockTimes['EntityType']);
		$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['EntityUuid'], $mockTimes['EntityUuid']);
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $test = new AlertingEntity($domainValueObjectIdMock, $domainValueObjectProjectNameMock, $domainValueObjectEntityTypeMock, $domainValueObjectEntityUuidMock, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        
        $result = $test->serialize();
        self::assertEquals($mockArgs['serialize'], $result);
    }

}
