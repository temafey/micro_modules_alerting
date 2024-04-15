<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Mock\Domain;

/**
 * Mock helper trait
 *
 * @package MicroModule\Alerting\Tests\Unit\Mock\Domain
 */
trait RepositoryMockHelper
{
    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface
     */
    protected function createDomainRepositoryProcessorAlertingProcessorInterfaceMock(
        array $mockArgs = ['handleAlert' => ''],
        array $mockTimes = ['handleAlert' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface', \MicroModule\Alerting\Domain\Repository\Processor\AlertingProcessorInterface::class);

		if (array_key_exists('handleAlert', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('handleAlert');
                
            if (null === $mockTimes['handleAlert']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['handleAlert'])) {
                $mockMethod->times($mockTimes['handleAlert']['times']);
            } else {
                $mockMethod->times($mockTimes['handleAlert']);
            }
			$mockMethod->andReturn($mockArgs['handleAlert']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface
     */
    protected function createDomainRepositoryAlertingRepositoryInterfaceMock(
        array $mockArgs = ['get' => '', 'getById' => '', 'exists' => '', 'store' => ''],
        array $mockTimes = ['get' => 0, 'getById' => 0, 'exists' => 0, 'store' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface', \MicroModule\Alerting\Domain\Repository\AlertingRepositoryInterface::class);

		if (array_key_exists('get', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('get');
                
            if (null === $mockTimes['get']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['get'])) {
                $mockMethod->times($mockTimes['get']['times']);
            } else {
                $mockMethod->times($mockTimes['get']);
            }
			
			$domainEntityAlertingEntityMock = $this->createDomainEntityAlertingEntityMock($mockArgs['get'], $mockTimes['get']);
			$mockMethod->andReturn($domainEntityAlertingEntityMock);
		}

		if (array_key_exists('getById', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getById');
                
            if (null === $mockTimes['getById']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getById'])) {
                $mockMethod->times($mockTimes['getById']['times']);
            } else {
                $mockMethod->times($mockTimes['getById']);
            }
			
			$domainEntityAlertingEntityMock = $this->createDomainEntityAlertingEntityMock($mockArgs['getById'], $mockTimes['getById']);
			$mockMethod->andReturn($domainEntityAlertingEntityMock);
		}

		if (array_key_exists('exists', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('exists');
                
            if (null === $mockTimes['exists']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['exists'])) {
                $mockMethod->times($mockTimes['exists']['times']);
            } else {
                $mockMethod->times($mockTimes['exists']);
            }
			$mockMethod->andReturn($mockArgs['exists']);
		}

		if (array_key_exists('store', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('store');
                
            if (null === $mockTimes['store']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['store'])) {
                $mockMethod->times($mockTimes['store']['times']);
            } else {
                $mockMethod->times($mockTimes['store']);
            }
			$mockMethod->andReturn($mockArgs['store']);
		}


        return $mock;
    }
}
