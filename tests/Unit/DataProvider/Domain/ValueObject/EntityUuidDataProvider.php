<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class EntityUuidDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'fromNative' => NULL,
			    ],
			    1 => [
			      'fromNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForGenerateAsStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'generateAsString' => 'autem',
			    ],
			    1 => [
			      'generateAsString' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'toNative' => 'velit',
			    ],
			    1 => [
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForGetUuidMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'getUuid' => '609ab70e-8ab9-327d-ab99-6a4b06af0e30',
			    ],
			    1 => [
			      'getUuid' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'sameValueAs' => false,
			      'ValueObjectInterface' => [
			        'toNative' => 'non',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataForIsEmptyMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      'isEmpty' => true,
			    ],
			    1 => [
			      'isEmpty' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\EntityUuid
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'value' => 'illum',
			      '__toString' => 'voluptatem',
			    ],
			    1 => [
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
