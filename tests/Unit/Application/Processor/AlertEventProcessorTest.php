<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Application\Processor;

use MicroModule\Alerting\Application\Processor\AlertEventProcessor;
use MicroModule\Alerting\Tests\Unit\Mock\Domain\EntityMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Interop\QueueMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\MicroModule\ValueObjectMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Native\DateTimeMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Native\ThrowableMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Psr\LogMockHelper;
use MicroModule\Alerting\Tests\Unit\Mock\Vendor\Ramsey\UuidMockHelper;
use MicroModule\Alerting\Tests\Unit\UnitTestCase;

/**
 * Test for class AlertEventProcessor
 *
 * @class AlertEventProcessorTest
 *
 * @package MicroModule\Alerting\Tests\Unit\Application\Processor
 */
class AlertEventProcessorTest extends UnitTestCase
{
	use RepositoryMockHelper, ValueObjectMockHelper, UuidMockHelper, DateTimeMockHelper, ValueObjectMockHelper, EntityMockHelper, QueueMockHelper, LogMockHelper, ThrowableMockHelper;

    /**
     * Test for "Process enqueue message".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::process
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForProcessMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function processShouldReturnObjectTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $interopQueueMessageMock = $this->createInteropQueueMessageMock($mockArgs['Message'], $mockTimes['Message']);
		$interopQueueContextMock = $this->createInteropQueueContextMock($mockArgs['Context'], $mockTimes['Context']);
        $result = $test->process($interopQueueMessageMock, $interopQueueContextMock);
        self::assertInstanceOf(\object::class, $result);
    }

    /**
     * Test for "Return enqueue command routers".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::getSubscribedCommand
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForGetSubscribedCommandMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getSubscribedCommandShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        
        $test = AlertEventProcessor::getSubscribedCommand();
        self::assertEquals($mockArgs['getSubscribedCommand'], $test);
    }

    /**
     * Test for "ExceptionListener constructor".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::setLogger
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForSetLoggerMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function setLoggerShouldReturnAlertEventProcessorTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $psrLogLoggerInterfaceMock = $this->createPsrLogLoggerInterfaceMock($mockArgs['LoggerInterface'], $mockTimes['LoggerInterface']);
        $result = $test->setLogger($psrLogLoggerInterfaceMock);
        self::assertInstanceOf(\MicroModule\Alerting\Application\Processor\AlertEventProcessor::class, $result);
    }

    /**
     * Test for "Log an regular message or warning".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::logMessage
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForLogMessageMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function logMessageShouldReturnAlertEventProcessorTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $message = $mockArgs['message'];
		$level = $mockArgs['level'];
		$context = [];
        $result = $test->logMessage($message, $level, $context);
        self::assertInstanceOf(\MicroModule\Alerting\Application\Processor\AlertEventProcessor::class, $result);
    }

    /**
     * Test for "Log an exception".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::logException
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForLogExceptionMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function logExceptionShouldReturnAlertEventProcessorTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $throwableMock = $this->createThrowableMock($mockArgs['Throwable'], $mockTimes['Throwable']);
		$level = $mockArgs['level'];
		$message = $mockArgs['message'];
        $result = $test->logException($throwableMock, $level, $message);
        self::assertInstanceOf(\MicroModule\Alerting\Application\Processor\AlertEventProcessor::class, $result);
    }

    /**
     * Test for "Define exception level from exception type".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::getExceptionLevel
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForGetExceptionLevelMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionLevelShouldReturnIntTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $throwableMock = $this->createThrowableMock($mockArgs['Throwable'], $mockTimes['Throwable']);
        $result = $test->getExceptionLevel($throwableMock);
        self::assertEquals($mockArgs['getExceptionLevel'], $result);
    }

    /**
     * Test for "Generate exception message".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::getExceptionMessage
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForGetExceptionMessageMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getExceptionMessageShouldReturnStringTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $throwableMock = $this->createThrowableMock($mockArgs['Throwable'], $mockTimes['Throwable']);
        $result = $test->getExceptionMessage($throwableMock);
        self::assertEquals($mockArgs['getExceptionMessage'], $result);
    }

    /**
     * Test for "Return parent exception".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::getParentException
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForGetParentExceptionMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getParentExceptionShouldReturnThrowableTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        
        $result = $test->getParentException();
        self::assertInstanceOf(\Throwable::class, $result);
    }

    /**
     * Test for "Return context exception array from parent exception object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Application\Processor\AlertEventProcessor::getParentExceptionContext
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor\AlertEventProcessorDataProvider::getDataForGetParentExceptionContextMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getParentExceptionContextShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryProcessorAlertingProcessorInterfaceMock = $this->createDomainRepositoryProcessorAlertingProcessorInterfaceMock($mockArgs['AlertingProcessorInterface'], $mockTimes['AlertingProcessorInterface']);
		$domainRepositoryAlertingRepositoryInterfaceMock = $this->createDomainRepositoryAlertingRepositoryInterfaceMock($mockArgs['AlertingRepositoryInterface'], $mockTimes['AlertingRepositoryInterface']);
        $test = new AlertEventProcessor($domainRepositoryProcessorAlertingProcessorInterfaceMock, $domainRepositoryAlertingRepositoryInterfaceMock);
        $context = [];
		$contextSerializeType = 'none';
        $result = $test->getParentExceptionContext($context, $contextSerializeType);
        self::assertEquals($mockArgs['getParentExceptionContext'], $result);
    }

}
