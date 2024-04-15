<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class RepetitionsDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'sameValueAs' => false,
			      'ValueObjectInterface' => [
			        'toNative' => 'tenetur',
			        'sameValueAs' => false,
			      ],
			    ],
			    1 => [
			      'sameValueAs' => 0,
			      'ValueObjectInterface' => [
			        'times' => 0,
			        'toNative' => 0,
			        'sameValueAs' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'toNative' => 9,
			    ],
			    1 => [
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForToRealMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'toReal' => NULL,
			    ],
			    1 => [
			      'toReal' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForIncMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'inc' => [
			        'sameValueAs' => false,
			        'toNative' => 9,
			        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
			      ],
			    ],
			    1 => [
			      'inc' => [
			        'times' => 0,
			        'sameValueAs' => 0,
			        'toNative' => 0,
			        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForDecrMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'decr' => [
			        'sameValueAs' => true,
			        'toNative' => 3,
			        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
			      ],
			    ],
			    1 => [
			      'decr' => [
			        'times' => 0,
			        'sameValueAs' => 0,
			        'toNative' => 0,
			        'className' => 'MicroModule\\ValueObject\\Number\\Integer',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'fromNative' => NULL,
			    ],
			    1 => [
			      'fromNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForToIntegerMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'toInteger' => NULL,
			      'RoundingMode' => [
			        'toNative' => 'atque',
			        'sameValueAs' => false,
			        '__sleep' => 'atque',
			        'getValue' => false,
			        'getName' => 'Miss Sibyl Dietrich Jr.',
			        'getOrdinal' => 2,
			        'is' => false,
			        '__serialize' => NULL,
			        '__unserialize' => NULL,
			        'serialize' => 'blanditiis',
			        'unserialize' => NULL,
			      ],
			    ],
			    1 => [
			      'toInteger' => 0,
			      'RoundingMode' => [
			        'times' => 0,
			        'toNative' => 0,
			        'sameValueAs' => 0,
			        '__sleep' => 0,
			        'getValue' => 0,
			        'getName' => 0,
			        'getOrdinal' => 0,
			        'is' => 0,
			        '__serialize' => 0,
			        '__unserialize' => 0,
			        'serialize' => 0,
			        'unserialize' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataForToNaturalMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      'toNatural' => NULL,
			      'RoundingMode' => [
			        'toNative' => 'voluptates',
			        'sameValueAs' => false,
			        '__sleep' => 'voluptates',
			        'getValue' => false,
			        'getName' => 'Hermina O\'Keefe',
			        'getOrdinal' => 6,
			        'is' => false,
			        '__serialize' => NULL,
			        '__unserialize' => NULL,
			        'serialize' => 'ex',
			        'unserialize' => NULL,
			      ],
			    ],
			    1 => [
			      'toNatural' => 0,
			      'RoundingMode' => [
			        'times' => 0,
			        'toNative' => 0,
			        'sameValueAs' => 0,
			        '__sleep' => 0,
			        'getValue' => 0,
			        'getName' => 0,
			        'getOrdinal' => 0,
			        'is' => 0,
			        '__serialize' => 0,
			        '__unserialize' => 0,
			        'serialize' => 0,
			        'unserialize' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Repetitions
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 3,
			      '__toString' => 'quo',
			    ],
			    1 => [
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
