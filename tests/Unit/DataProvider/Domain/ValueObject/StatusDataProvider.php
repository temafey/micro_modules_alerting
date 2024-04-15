<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class StatusDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'sameValueAs' => true,
			      'ValueObjectInterface' => [
			        'toNative' => 'nihil',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'toNative' => 9,
			    ],
			    1 => [
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForToRealMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'toReal' => NULL,
			    ],
			    1 => [
			      'toReal' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForIncMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'inc' => [
			        'sameValueAs' => false,
			        'toNative' => 1,
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForDecrMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'decr' => [
			        'sameValueAs' => false,
			        'toNative' => 4,
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'fromNative' => NULL,
			    ],
			    1 => [
			      'fromNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForToIntegerMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'toInteger' => NULL,
			      'RoundingMode' => [
			        'toNative' => 'nostrum',
			        'sameValueAs' => false,
			        '__sleep' => 'nostrum',
			        'getValue' => false,
			        'getName' => 'Allison Roberts',
			        'getOrdinal' => 6,
			        'is' => false,
			        '__serialize' => NULL,
			        '__unserialize' => NULL,
			        'serialize' => 'ducimus',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataForToNaturalMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      'toNatural' => NULL,
			      'RoundingMode' => [
			        'toNative' => 'et',
			        'sameValueAs' => true,
			        '__sleep' => 'et',
			        'getValue' => true,
			        'getName' => 'Mallory Ziemann',
			        'getOrdinal' => 3,
			        'is' => true,
			        '__serialize' => NULL,
			        '__unserialize' => NULL,
			        'serialize' => 'animi',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Status
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 9,
			      '__toString' => 'omnis',
			    ],
			    1 => [
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
