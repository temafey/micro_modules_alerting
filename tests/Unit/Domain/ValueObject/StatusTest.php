<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\ValueObject;

use MicroModule\Alerting\Domain\ValueObject\Status;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class Status
 *
 * @class StatusTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\ValueObject
 */
class StatusTest extends UnitTestCase
{
	use ValueObjectMockHelper;

    /**
     * Test for "Tells whether two Integer are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::sameValueAs
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $microModuleValueObjectValueObjectInterfaceMock = $this->createMicroModuleValueObjectValueObjectInterfaceMock($mockArgs['ValueObjectInterface'], $mockTimes['ValueObjectInterface']);
        $result = $test->sameValueAs($microModuleValueObjectValueObjectInterfaceMock);
        self::assertTrue($result);
    }

    /**
     * Test for "Returns the value of the integer number".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::toNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeShouldReturnIntTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        
        $result = $test->toNative();
        self::assertEquals($mockArgs['toNative'], $result);
    }

    /**
     * Test for "Returns a Real with the value of the Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::toReal
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToRealMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toRealShouldReturnRealTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        
        $result = $test->toReal();
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Real::class, $result);
    }

    /**
     * Test for "Increment value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::inc
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForIncMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function incShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        
        $result = $test->inc();
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Integer::class, $result);
    }

    /**
     * Test for "Decrement value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::decr
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForDecrMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function decrShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        
        $result = $test->decr();
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Integer::class, $result);
    }

    /**
     * Test for "Returns a Real object given a PHP native float as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::fromNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeShouldReturnRealTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = Status::fromNative();
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Real::class, $test);
    }

    /**
     * Test for "Returns the integer part of the Real number as a Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::toInteger
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToIntegerMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toIntegerShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $microModuleValueObjectNumberRoundingModeMock = $this->createMicroModuleValueObjectNumberRoundingModeMock($mockArgs['RoundingMode'], $mockTimes['RoundingMode']);
        $result = $test->toInteger($microModuleValueObjectNumberRoundingModeMock);
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Integer::class, $result);
    }

    /**
     * Test for "Returns the absolute integer part of the Real number as a Natural".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::toNatural
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataForToNaturalMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNaturalShouldReturnNaturalTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        $microModuleValueObjectNumberRoundingModeMock = $this->createMicroModuleValueObjectNumberRoundingModeMock($mockArgs['RoundingMode'], $mockTimes['RoundingMode']);
        $result = $test->toNatural($microModuleValueObjectNumberRoundingModeMock);
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Natural::class, $result);
    }

    /**
     * Test for "Returns the string representation of the real value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Status::__toString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\StatusDataProvider::getDataFor__toStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function __toStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Status($value);
        
        $result = $test->__toString();
        self::assertEquals($mockArgs['__toString'], $result);
    }

}
