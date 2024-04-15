<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\ValueObject;

use MicroModule\Alerting\Domain\ValueObject\ExceptionMessage;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class ExceptionMessage
 *
 * @class ExceptionMessageTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\ValueObject
 */
class ExceptionMessageTest extends UnitTestCase
{
	use ValueObjectMockHelper;

    /**
     * Test for "Returns a StringLiteral object given a PHP native string as parameter".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::fromNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\ExceptionMessageDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeShouldReturnStringLiteralTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = ExceptionMessage::fromNative();
        self::assertInstanceOf(\MicroModule\ValueObject\StringLiteral\StringLiteral::class, $test);
    }

    /**
     * Test for "Returns the value of the string".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::toNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\ExceptionMessageDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new ExceptionMessage($value);
        
        $result = $test->toNative();
        self::assertEquals($mockArgs['toNative'], $result);
    }

    /**
     * Test for "Tells whether two string literals are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::sameValueAs
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\ExceptionMessageDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new ExceptionMessage($value);
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::isEmpty
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\ExceptionMessageDataProvider::getDataForIsEmptyMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function isEmptyShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new ExceptionMessage($value);
        
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
     * @covers       \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::__toString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\ExceptionMessageDataProvider::getDataFor__toStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function __toStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $value = $mockArgs['value'];
        $test = new ExceptionMessage($value);
        
        $result = $test->__toString();
        self::assertEquals($mockArgs['__toString'], $result);
    }

}
