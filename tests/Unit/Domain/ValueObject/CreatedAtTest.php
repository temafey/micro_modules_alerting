<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\ValueObject;

use MicroModule\Alerting\Domain\ValueObject\CreatedAt;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Native\DateTimeMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class CreatedAt
 *
 * @class CreatedAtTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Domain\ValueObject
 */
class CreatedAtTest extends UnitTestCase
{
	use DateTimeMockHelper, ValueObjectMockHelper;

    /**
     * Test for "Returns a new DateTime object from native values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::fromNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForFromNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeShouldReturnDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = CreatedAt::fromNative();
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
    }

    /**
     * Test for "Return native value".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::toNative
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForToNativeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeShouldReturnBaseDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        
        $result = $test->toNative();
        self::assertInstanceOf(\BaseDateTime::class, $result);
    }

    /**
     * Test for "Returns a new DateTime from a native PHP DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::fromNativeDateTime
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForFromNativeDateTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function fromNativeDateTimeShouldReturnDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        $dateTimeMock = $this->createDateTimeMock($mockArgs['DateTime'], $mockTimes['DateTime']);
        $test = CreatedAt::fromNativeDateTime($dateTimeMock);
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
    }

    /**
     * Test for "Returns current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::now
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForNowMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function nowShouldReturnDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = CreatedAt::now();
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\DateTime::class, $test);
    }

    /**
     * Test for "Tells whether two DateTime are equal by comparing their values".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::sameValueAs
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForSameValueAsMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function sameValueAsShouldReturnBoolTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        $microModuleValueObjectValueObjectInterfaceMock = $this->createMicroModuleValueObjectValueObjectInterfaceMock($mockArgs['ValueObjectInterface'], $mockTimes['ValueObjectInterface']);
        $result = $test->sameValueAs($microModuleValueObjectValueObjectInterfaceMock);
        self::assertTrue($result);
    }

    /**
     * Test for "Returns date from current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::getDate
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForGetDateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getDateShouldReturnDateTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        
        $result = $test->getDate();
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\Date::class, $result);
    }

    /**
     * Test for "Returns time from current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::getTime
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForGetTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getTimeShouldReturnTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        
        $result = $test->getTime();
        self::assertInstanceOf(\MicroModule\ValueObject\DateTime\Time::class, $result);
    }

    /**
     * Test for "Returns a native PHP DateTime version of the current DateTime".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::toNativeDateTime
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataForToNativeDateTimeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function toNativeDateTimeShouldReturnDateTimeTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        
        $result = $test->toNativeDateTime();
        self::assertInstanceOf(\DateTime::class, $result);
    }

    /**
     * Test for "Returns DateTime as string in format "Y-n-j G:i:s"".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\ValueObject\CreatedAt::__toString
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject\CreatedAtDataProvider::getDataFor__toStringMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function __toStringShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['Date'], $mockTimes['Date']);
		$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['Time'], $mockTimes['Time']);
        $test = new CreatedAt($microModuleValueObjectDateTimeDateMock, $microModuleValueObjectDateTimeTimeMock);
        
        $result = $test->__toString();
        self::assertEquals($mockArgs['__toString'], $result);
    }

}
