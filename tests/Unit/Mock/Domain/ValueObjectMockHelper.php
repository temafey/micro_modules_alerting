<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Mock\Domain;

/**
 * Mock helper trait
 *
 * @package MicroModule\Alerting\Tests\Unit\Mock\Domain
 */
trait ValueObjectMockHelper
{
    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\Id
     */
    protected function createDomainValueObjectIdMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\Id', \MicroModule\Alerting\Domain\ValueObject\Id::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\EntityType
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\EntityType
     */
    protected function createDomainValueObjectEntityTypeMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\EntityType', \MicroModule\Alerting\Domain\ValueObject\EntityType::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\ProjectName
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\ProjectName
     */
    protected function createDomainValueObjectProjectNameMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\ProjectName', \MicroModule\Alerting\Domain\ValueObject\ProjectName::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\ExceptionClass
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\ExceptionClass
     */
    protected function createDomainValueObjectExceptionClassMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\ExceptionClass', \MicroModule\Alerting\Domain\ValueObject\ExceptionClass::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\EntityUuid
     */
    protected function createDomainValueObjectEntityUuidMock(
        array $mockArgs = ['toNative' => '', 'getUuid' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'getUuid' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\EntityUuid', \MicroModule\Alerting\Domain\ValueObject\EntityUuid::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('getUuid', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getUuid');
                
            if (null === $mockTimes['getUuid']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getUuid'])) {
                $mockMethod->times($mockTimes['getUuid']['times']);
            } else {
                $mockMethod->times($mockTimes['getUuid']);
            }
			
			$ramseyUuidUuidInterfaceMock = $this->createRamseyUuidUuidInterfaceMock($mockArgs['getUuid'], $mockTimes['getUuid']);
			$mockMethod->andReturn($ramseyUuidUuidInterfaceMock);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\ExceptionType
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\ExceptionType
     */
    protected function createDomainValueObjectExceptionTypeMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\ExceptionType', \MicroModule\Alerting\Domain\ValueObject\ExceptionType::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     */
    protected function createDomainValueObjectExceptionMessageMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'isEmpty' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'isEmpty' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\ExceptionMessage', \MicroModule\Alerting\Domain\ValueObject\ExceptionMessage::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('isEmpty', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('isEmpty');
                
            if (null === $mockTimes['isEmpty']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['isEmpty'])) {
                $mockMethod->times($mockTimes['isEmpty']['times']);
            } else {
                $mockMethod->times($mockTimes['isEmpty']);
            }
			$mockMethod->andReturn($mockArgs['isEmpty']);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\Status
     */
    protected function createDomainValueObjectStatusMock(
        array $mockArgs = ['sameValueAs' => '', 'toNative' => '', 'inc' => '', 'decr' => ''],
        array $mockTimes = ['sameValueAs' => 0, 'toNative' => 0, 'inc' => 0, 'decr' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\Status', \MicroModule\Alerting\Domain\ValueObject\Status::class);

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('inc', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('inc');
                
            if (null === $mockTimes['inc']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['inc'])) {
                $mockMethod->times($mockTimes['inc']['times']);
            } else {
                $mockMethod->times($mockTimes['inc']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('decr', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('decr');
                
            if (null === $mockTimes['decr']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['decr'])) {
                $mockMethod->times($mockTimes['decr']['times']);
            } else {
                $mockMethod->times($mockTimes['decr']);
            }
			$mockMethod->andReturnSelf();
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\Repetitions
     */
    protected function createDomainValueObjectRepetitionsMock(
        array $mockArgs = ['sameValueAs' => '', 'toNative' => '', 'inc' => '', 'decr' => ''],
        array $mockTimes = ['sameValueAs' => 0, 'toNative' => 0, 'inc' => 0, 'decr' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\Repetitions', \MicroModule\Alerting\Domain\ValueObject\Repetitions::class);

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			$mockMethod->andReturn($mockArgs['toNative']);
		}

		if (array_key_exists('inc', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('inc');
                
            if (null === $mockTimes['inc']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['inc'])) {
                $mockMethod->times($mockTimes['inc']['times']);
            } else {
                $mockMethod->times($mockTimes['inc']);
            }
			$mockMethod->andReturnSelf();
		}

		if (array_key_exists('decr', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('decr');
                
            if (null === $mockTimes['decr']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['decr'])) {
                $mockMethod->times($mockTimes['decr']['times']);
            } else {
                $mockMethod->times($mockTimes['decr']);
            }
			$mockMethod->andReturnSelf();
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\CreatedAt
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\CreatedAt
     */
    protected function createDomainValueObjectCreatedAtMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'getDate' => '', 'getTime' => '', 'toNativeDateTime' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'getDate' => 0, 'getTime' => 0, 'toNativeDateTime' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\CreatedAt', \MicroModule\Alerting\Domain\ValueObject\CreatedAt::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNative'], $mockTimes['toNative']);
			$mockMethod->andReturn($dateTimeMock);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('getDate', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getDate');
                
            if (null === $mockTimes['getDate']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getDate'])) {
                $mockMethod->times($mockTimes['getDate']['times']);
            } else {
                $mockMethod->times($mockTimes['getDate']);
            }
			
			$microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['getDate'], $mockTimes['getDate']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeDateMock);
		}

		if (array_key_exists('getTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTime');
                
            if (null === $mockTimes['getTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTime'])) {
                $mockMethod->times($mockTimes['getTime']['times']);
            } else {
                $mockMethod->times($mockTimes['getTime']);
            }
			
			$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['getTime'], $mockTimes['getTime']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeTimeMock);
		}

		if (array_key_exists('toNativeDateTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNativeDateTime');
                
            if (null === $mockTimes['toNativeDateTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNativeDateTime'])) {
                $mockMethod->times($mockTimes['toNativeDateTime']['times']);
            } else {
                $mockMethod->times($mockTimes['toNativeDateTime']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNativeDateTime'], $mockTimes['toNativeDateTime']);
			$mockMethod->andReturn($dateTimeMock);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     */
    protected function createDomainValueObjectUpdatedAtMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'getDate' => '', 'getTime' => '', 'toNativeDateTime' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'getDate' => 0, 'getTime' => 0, 'toNativeDateTime' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\UpdatedAt', \MicroModule\Alerting\Domain\ValueObject\UpdatedAt::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNative'], $mockTimes['toNative']);
			$mockMethod->andReturn($dateTimeMock);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('getDate', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getDate');
                
            if (null === $mockTimes['getDate']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getDate'])) {
                $mockMethod->times($mockTimes['getDate']['times']);
            } else {
                $mockMethod->times($mockTimes['getDate']);
            }
			
			$microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['getDate'], $mockTimes['getDate']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeDateMock);
		}

		if (array_key_exists('getTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTime');
                
            if (null === $mockTimes['getTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTime'])) {
                $mockMethod->times($mockTimes['getTime']['times']);
            } else {
                $mockMethod->times($mockTimes['getTime']);
            }
			
			$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['getTime'], $mockTimes['getTime']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeTimeMock);
		}

		if (array_key_exists('toNativeDateTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNativeDateTime');
                
            if (null === $mockTimes['toNativeDateTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNativeDateTime'])) {
                $mockMethod->times($mockTimes['toNativeDateTime']['times']);
            } else {
                $mockMethod->times($mockTimes['toNativeDateTime']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNativeDateTime'], $mockTimes['toNativeDateTime']);
			$mockMethod->andReturn($dateTimeMock);
		}


        return $mock;
    }

    /**
     * Create and return mock object for class MicroModule\Alerting\Domain\ValueObject\AlertedAt
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @return \Mockery\MockInterface|\MicroModule\Alerting\Domain\ValueObject\AlertedAt
     */
    protected function createDomainValueObjectAlertedAtMock(
        array $mockArgs = ['toNative' => '', 'sameValueAs' => '', 'getDate' => '', 'getTime' => '', 'toNativeDateTime' => ''],
        array $mockTimes = ['toNative' => 0, 'sameValueAs' => 0, 'getDate' => 0, 'getTime' => 0, 'toNativeDateTime' => 0]
    ): \Mockery\MockInterface {
        $mock = \Mockery::namedMock('Mock\MicroModule\Alerting\Domain\ValueObject\AlertedAt', \MicroModule\Alerting\Domain\ValueObject\AlertedAt::class);

		if (array_key_exists('toNative', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNative');
                
            if (null === $mockTimes['toNative']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNative'])) {
                $mockMethod->times($mockTimes['toNative']['times']);
            } else {
                $mockMethod->times($mockTimes['toNative']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNative'], $mockTimes['toNative']);
			$mockMethod->andReturn($dateTimeMock);
		}

		if (array_key_exists('sameValueAs', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('sameValueAs');
                
            if (null === $mockTimes['sameValueAs']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['sameValueAs'])) {
                $mockMethod->times($mockTimes['sameValueAs']['times']);
            } else {
                $mockMethod->times($mockTimes['sameValueAs']);
            }
			$mockMethod->andReturn($mockArgs['sameValueAs']);
		}

		if (array_key_exists('getDate', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getDate');
                
            if (null === $mockTimes['getDate']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getDate'])) {
                $mockMethod->times($mockTimes['getDate']['times']);
            } else {
                $mockMethod->times($mockTimes['getDate']);
            }
			
			$microModuleValueObjectDateTimeDateMock = $this->createMicroModuleValueObjectDateTimeDateMock($mockArgs['getDate'], $mockTimes['getDate']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeDateMock);
		}

		if (array_key_exists('getTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('getTime');
                
            if (null === $mockTimes['getTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['getTime'])) {
                $mockMethod->times($mockTimes['getTime']['times']);
            } else {
                $mockMethod->times($mockTimes['getTime']);
            }
			
			$microModuleValueObjectDateTimeTimeMock = $this->createMicroModuleValueObjectDateTimeTimeMock($mockArgs['getTime'], $mockTimes['getTime']);
			$mockMethod->andReturn($microModuleValueObjectDateTimeTimeMock);
		}

		if (array_key_exists('toNativeDateTime', $mockTimes)) {
            $mockMethod = $mock
                ->shouldReceive('toNativeDateTime');
                
            if (null === $mockTimes['toNativeDateTime']) {
                $mockMethod->zeroOrMoreTimes();
            } elseif (is_array($mockTimes['toNativeDateTime'])) {
                $mockMethod->times($mockTimes['toNativeDateTime']['times']);
            } else {
                $mockMethod->times($mockTimes['toNativeDateTime']);
            }
			
			$dateTimeMock = $this->createDateTimeMock($mockArgs['toNativeDateTime'], $mockTimes['toNativeDateTime']);
			$mockMethod->andReturn($dateTimeMock);
		}


        return $mock;
    }
}
