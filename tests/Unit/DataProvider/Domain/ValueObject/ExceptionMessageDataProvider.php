<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class ExceptionMessageDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'est',
			      'fromNative' => NULL,
			    ],
			    1 => [
			      'fromNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'est',
			      'toNative' => 'autem',
			    ],
			    1 => [
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'est',
			      'sameValueAs' => false,
			      'ValueObjectInterface' => [
			        'toNative' => 'quia',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @return mixed[]
     */
    public function getDataForIsEmptyMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'est',
			      'isEmpty' => false,
			    ],
			    1 => [
			      'isEmpty' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\ExceptionMessage
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'est',
			      '__toString' => 'vel',
			    ],
			    1 => [
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
