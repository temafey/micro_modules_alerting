<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\Factory;

use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Native\ThrowableMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class AlertingFactory
 *
 * @class AlertingFactoryTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\Factory
 */
class AlertingFactoryTest extends UnitTestCase
{
	use ValueObjectMockHelper, ThrowableMockHelper;

    /**
     * Test for "Factory method for initialize new AlertingEntity object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Factory\AlertingFactory::makeInstance
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Factory\AlertingFactoryDataProvider::getDataForMakeInstanceMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeInstanceShouldReturnAlertingEntityTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = new AlertingFactory();
        $projectName = $mockArgs['projectName'];
		$entityType = $mockArgs['entityType'];
		$entityUuid = $mockArgs['entityUuid'];
		$exceptionType = $mockArgs['exceptionType'];
		$exceptionClass = $mockArgs['exceptionClass'];
		$exceptionMessage = $mockArgs['exceptionMessage'];
        $result = $test->makeInstance($projectName, $entityType, $entityUuid, $exceptionType, $exceptionClass, $exceptionMessage);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\Entity\AlertingEntity::class, $result);
    }

    /**
     * Test for "Generate unique exception hash id from project name, exceptoin type, exception class and exception message".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Factory\AlertingFactory::generateId
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Factory\AlertingFactoryDataProvider::getDataForGenerateIdMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function generateIdShouldReturnIdTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = new AlertingFactory();
        $projectName = $mockArgs['projectName'];
		$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['ExceptionType'], $mockTimes['ExceptionType']);
		$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['ExceptionClass'], $mockTimes['ExceptionClass']);
		$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['ExceptionMessage'], $mockTimes['ExceptionMessage']);
        $result = $test->generateId($projectName, $domainValueObjectExceptionTypeMock, $domainValueObjectExceptionClassMock, $domainValueObjectExceptionMessageMock);
        self::assertInstanceOf(\MicroModule\Alerting\Domain\ValueObject\Id::class, $result);
    }

    /**
     * Test for "Define exception type from exception object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Factory\AlertingFactory::getExceptionType
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\Factory\AlertingFactoryDataProvider::getDataForGetExceptionTypeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionTypeShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = new AlertingFactory();
        $throwableMock = $this->createThrowableMock($mockArgs['Throwable'], $mockTimes['Throwable']);
        $result = $test->getExceptionType($throwableMock);
        self::assertEquals($mockArgs['getExceptionType'], $result);
    }

}
