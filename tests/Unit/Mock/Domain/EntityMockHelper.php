<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Mock\Domain;

/**
 * Mock helper trait
 *
 * @package MicroModule\Alerting\Tests\Unit\Mock\Domain
 */
trait EntityMockHelper
{
    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\Entity\AlertingEntity
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\Entity\AlertingEntity
     */
    protected function createDomainEntityAlertingEntityMock(
        array $mockArgs = ['getId' => '', 'getEntityType' => '', 'getProjectName' => '', 'getExceptionClass' => '', 'getEntityUuid' => '', 'getExceptionType' => '', 'setExceptionType' => '', 'getExceptionMessage' => '', 'getStatus' => '', 'setStatus' => '', 'getRepetitions' => '', 'increment' => '', 'getCreatedAt' => '', 'getUpdateAt' => '', 'getAlertedAt' => '', 'setAlertedAt' => '', 'serialize' => ''],
        array $mockTimes = ['getId' => 0, 'getEntityType' => 0, 'getProjectName' => 0, 'getExceptionClass' => 0, 'getEntityUuid' => 0, 'getExceptionType' => 0, 'setExceptionType' => 0, 'getExceptionMessage' => 0, 'getStatus' => 0, 'setStatus' => 0, 'getRepetitions' => 0, 'increment' => 0, 'getCreatedAt' => 0, 'getUpdateAt' => 0, 'getAlertedAt' => 0, 'setAlertedAt' => 0, 'serialize' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\Entity\AlertingEntity', \MicroModule\Alerting\Domain\Entity\AlertingEntity::class);

		if (array_key_exists('getId', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getId');
                
            if (null === $mockTimes['getId']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getId'])) {
                $mockMethod->times($mockTimes['getId']['times']);
            } else {
                $mockMethod->times($mockTimes['getId']);
            }
			
			$domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['getId'], $mockTimes['getId']);
			$mockMethod->andReturn($domainValueObjectIdMock);
		}

		if (array_key_exists('getEntityType', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getEntityType');
                
            if (null === $mockTimes['getEntityType']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getEntityType'])) {
                $mockMethod->times($mockTimes['getEntityType']['times']);
            } else {
                $mockMethod->times($mockTimes['getEntityType']);
            }
			
			$domainValueObjectEntityTypeMock = $this->createDomainValueObjectEntityTypeMock($mockArgs['getEntityType'], $mockTimes['getEntityType']);
			$mockMethod->andReturn($domainValueObjectEntityTypeMock);
		}

		if (array_key_exists('getProjectName', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getProjectName');
                
            if (null === $mockTimes['getProjectName']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getProjectName'])) {
                $mockMethod->times($mockTimes['getProjectName']['times']);
            } else {
                $mockMethod->times($mockTimes['getProjectName']);
            }
			
			$domainValueObjectProjectNameMock = $this->createDomainValueObjectProjectNameMock($mockArgs['getProjectName'], $mockTimes['getProjectName']);
			$mockMethod->andReturn($domainValueObjectProjectNameMock);
		}

		if (array_key_exists('getExceptionClass', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getExceptionClass');
                
            if (null === $mockTimes['getExceptionClass']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getExceptionClass'])) {
                $mockMethod->times($mockTimes['getExceptionClass']['times']);
            } else {
                $mockMethod->times($mockTimes['getExceptionClass']);
            }
			
			$domainValueObjectExceptionClassMock = $this->createDomainValueObjectExceptionClassMock($mockArgs['getExceptionClass'], $mockTimes['getExceptionClass']);
			$mockMethod->andReturn($domainValueObjectExceptionClassMock);
		}

		if (array_key_exists('getEntityUuid', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getEntityUuid');
                
            if (null === $mockTimes['getEntityUuid']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getEntityUuid'])) {
                $mockMethod->times($mockTimes['getEntityUuid']['times']);
            } else {
                $mockMethod->times($mockTimes['getEntityUuid']);
            }
			
			$domainValueObjectEntityUuidMock = $this->createDomainValueObjectEntityUuidMock($mockArgs['getEntityUuid'], $mockTimes['getEntityUuid']);
			$mockMethod->andReturn($domainValueObjectEntityUuidMock);
		}

		if (array_key_exists('getExceptionType', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getExceptionType');
                
            if (null === $mockTimes['getExceptionType']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getExceptionType'])) {
                $mockMethod->times($mockTimes['getExceptionType']['times']);
            } else {
                $mockMethod->times($mockTimes['getExceptionType']);
            }
			
			$domainValueObjectExceptionTypeMock = $this->createDomainValueObjectExceptionTypeMock($mockArgs['getExceptionType'], $mockTimes['getExceptionType']);
			$mockMethod->andReturn($domainValueObjectExceptionTypeMock);
		}

		if (array_key_exists('setExceptionType', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setExceptionType');
                
            if (null === $mockTimes['setExceptionType']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setExceptionType'])) {
                $mockMethod->times($mockTimes['setExceptionType']['times']);
            } else {
                $mockMethod->times($mockTimes['setExceptionType']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('getExceptionMessage', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getExceptionMessage');
                
            if (null === $mockTimes['getExceptionMessage']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getExceptionMessage'])) {
                $mockMethod->times($mockTimes['getExceptionMessage']['times']);
            } else {
                $mockMethod->times($mockTimes['getExceptionMessage']);
            }
			
			$domainValueObjectExceptionMessageMock = $this->createDomainValueObjectExceptionMessageMock($mockArgs['getExceptionMessage'], $mockTimes['getExceptionMessage']);
			$mockMethod->andReturn($domainValueObjectExceptionMessageMock);
		}

		if (array_key_exists('getStatus', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getStatus');
                
            if (null === $mockTimes['getStatus']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getStatus'])) {
                $mockMethod->times($mockTimes['getStatus']['times']);
            } else {
                $mockMethod->times($mockTimes['getStatus']);
            }
			
			$domainValueObjectStatusMock = $this->createDomainValueObjectStatusMock($mockArgs['getStatus'], $mockTimes['getStatus']);
			$mockMethod->andReturn($domainValueObjectStatusMock);
		}

		if (array_key_exists('setStatus', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setStatus');
                
            if (null === $mockTimes['setStatus']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setStatus'])) {
                $mockMethod->times($mockTimes['setStatus']['times']);
            } else {
                $mockMethod->times($mockTimes['setStatus']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('getRepetitions', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getRepetitions');
                
            if (null === $mockTimes['getRepetitions']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getRepetitions'])) {
                $mockMethod->times($mockTimes['getRepetitions']['times']);
            } else {
                $mockMethod->times($mockTimes['getRepetitions']);
            }
			
			$domainValueObjectRepetitionsMock = $this->createDomainValueObjectRepetitionsMock($mockArgs['getRepetitions'], $mockTimes['getRepetitions']);
			$mockMethod->andReturn($domainValueObjectRepetitionsMock);
		}

		if (array_key_exists('increment', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('increment');
                
            if (null === $mockTimes['increment']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['increment'])) {
                $mockMethod->times($mockTimes['increment']['times']);
            } else {
                $mockMethod->times($mockTimes['increment']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('getCreatedAt', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getCreatedAt');
                
            if (null === $mockTimes['getCreatedAt']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getCreatedAt'])) {
                $mockMethod->times($mockTimes['getCreatedAt']['times']);
            } else {
                $mockMethod->times($mockTimes['getCreatedAt']);
            }
			
			$domainValueObjectCreatedAtMock = $this->createDomainValueObjectCreatedAtMock($mockArgs['getCreatedAt'], $mockTimes['getCreatedAt']);
			$mockMethod->andReturn($domainValueObjectCreatedAtMock);
		}

		if (array_key_exists('getUpdateAt', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getUpdateAt');
                
            if (null === $mockTimes['getUpdateAt']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getUpdateAt'])) {
                $mockMethod->times($mockTimes['getUpdateAt']['times']);
            } else {
                $mockMethod->times($mockTimes['getUpdateAt']);
            }
			
			$domainValueObjectUpdatedAtMock = $this->createDomainValueObjectUpdatedAtMock($mockArgs['getUpdateAt'], $mockTimes['getUpdateAt']);
			$mockMethod->andReturn($domainValueObjectUpdatedAtMock);
		}

		if (array_key_exists('getAlertedAt', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getAlertedAt');
                
            if (null === $mockTimes['getAlertedAt']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getAlertedAt'])) {
                $mockMethod->times($mockTimes['getAlertedAt']['times']);
            } else {
                $mockMethod->times($mockTimes['getAlertedAt']);
            }
			
			$domainValueObjectAlertedAtMock = $this->createDomainValueObjectAlertedAtMock($mockArgs['getAlertedAt'], $mockTimes['getAlertedAt']);
			$mockMethod->andReturn($domainValueObjectAlertedAtMock);
		}

		if (array_key_exists('setAlertedAt', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('setAlertedAt');
                
            if (null === $mockTimes['setAlertedAt']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['setAlertedAt'])) {
                $mockMethod->times($mockTimes['setAlertedAt']['times']);
            } else {
                $mockMethod->times($mockTimes['setAlertedAt']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('serialize', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('serialize');
                
            if (null === $mockTimes['serialize']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['serialize'])) {
                $mockMethod->times($mockTimes['serialize']['times']);
            } else {
                $mockMethod->times($mockTimes['serialize']);
            }
			$mockMethod->andReturn($mockArgs['serialize']);
		}


        return $mock;
    }
}
