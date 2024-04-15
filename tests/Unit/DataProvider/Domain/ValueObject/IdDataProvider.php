<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class IdDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'suscipit',
			      'fromNative' => NULL,
			    ],
			    1 => [
			      'fromNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'suscipit',
			      'toNative' => 'dolorum',
			    ],
			    1 => [
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'suscipit',
			      'sameValueAs' => true,
			      'ValueObjectInterface' => [
			        'toNative' => 'et',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @return mixed[]
     */
    public function getDataForIsEmptyMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'suscipit',
			      'isEmpty' => false,
			    ],
			    1 => [
			      'isEmpty' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\Id
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'suscipit',
			      '__toString' => 'saepe',
			    ],
			    1 => [
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
