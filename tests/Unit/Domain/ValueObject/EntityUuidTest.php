<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\ValueObject;

use MicroModule\Alerting\Domain\ValueObject\EntityUuid;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class EntityUuid
 *
 * @class EntityUuidTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\ValueObject
 */
class EntityUuidTest extends UnitTestCase
{
	use ValueObjectMockHelper;

    /**
     * Test for "Return UUID ValueObject".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::fromNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeShouldReturnUUIDTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = EntityUuid::fromNative();
        self::assertInstanceOf(\MicroModule\ValueObject\Identity\UUID::class, $test);
    }

    /**
     * Test for "Generate a new UUID string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::generateAsString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForGenerateAsStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function generateAsStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = EntityUuid::generateAsString();
        self::assertEquals($mockArgs['generateAsString'], $test);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::toNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = null;
        $test = new EntityUuid($value);
        
        $result = $test->toNative();
        self::assertEquals($mockArgs['toNative'], $result);
    }

    /**
     * Test for "Return Uuid object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::getUuid
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForGetUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getUuidShouldReturnUuidInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $value = null;
        $test = new EntityUuid($value);
        
        $result = $test->getUuid();
        self::assertInstanceOf(\Ramsey\Uuid\UuidInterface::class, $result);
    }

    /**
     * Test for "Tells whether two UUID are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::sameValueAs
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = null;
        $test = new EntityUuid($value);
        $microModuleValueObjectValueObjectInterfaceMock = $this->createMicroModuleValueObjectValueObjectInterfaceMock($mockArgs['ValueObjectInterface'], $mockTimes['ValueObjectInterface']);
        $result = $test->sameValueAs($microModuleValueObjectValueObjectInterfaceMock);
        self::assertTrue($result);
    }

    /**
     * Test for "Tells whether the StringLiteral is empty".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::isEmpty
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataForIsEmptyMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function isEmptyShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = null;
        $test = new EntityUuid($value);
        
        $result = $test->isEmpty();
        self::assertTrue($result);
    }

    /**
     * Test for "Returns the string value itself".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\EntityUuid::__toString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\EntityUuidDataProvider::getDataFor__toStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function __toStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = null;
        $test = new EntityUuid($value);
        
        $result = $test->__toString();
        self::assertEquals($mockArgs['__toString'], $result);
    }

}
