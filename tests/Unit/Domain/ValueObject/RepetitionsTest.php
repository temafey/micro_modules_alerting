<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\ValueObject;

use MicroModule\Alerting\Domain\ValueObject\Repetitions;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class Repetitions
 *
 * @class RepetitionsTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\ValueObject
 */
class RepetitionsTest extends UnitTestCase
{
	use ValueObjectMockHelper;

    /**
     * Test for "Tells whether two Integer are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::sameValueAs
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::toNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeShouldReturnIntTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
        
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::toReal
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForToRealMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toRealShouldReturnRealTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
        
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::inc
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForIncMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function incShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
        
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::decr
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForDecrMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function decrShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
        
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::fromNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeShouldReturnRealTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = Repetitions::fromNative();
        self::assertInstanceOf(\MicroModule\ValueObject\Number\Real::class, $test);
    }

    /**
     * Test for "Returns the integer part of the Real number as a Integer".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::toInteger
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForToIntegerMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toIntegerShouldReturnIntegerTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::toNatural
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataForToNaturalMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNaturalShouldReturnNaturalTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\Repetitions::__toString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\RepetitionsDataProvider::getDataFor__toStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function __toStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new Repetitions($value);
        
        $result = $test->__toString();
        self::assertEquals($mockArgs['__toString'], $result);
    }

}
