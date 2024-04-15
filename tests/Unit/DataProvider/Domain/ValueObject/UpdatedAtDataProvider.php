<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class UpdatedAtDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForFromNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'fromNative' => [
			        'toNative' => [
			          'getTimestamp' => '03:13:44',
			        ],
			        'sameValueAs' => false,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '07:10:26',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '05:09:18',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '01:32:31',
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'fromNative' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'sameValueAs' => 0,
			        'getDate' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'getTime' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'toNativeDateTime' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForToNativeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'toNative' => NULL,
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'toNative' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForFromNativeDateTimeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'fromNativeDateTime' => [
			        'toNative' => [
			          'getTimestamp' => '07:37:32',
			        ],
			        'sameValueAs' => true,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '08:41:49',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '03:14:00',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '21:50:14',
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			      'DateTime' => [
			        'getTimestamp' => '21:26:03',
			      ],
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'fromNativeDateTime' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'sameValueAs' => 0,
			        'getDate' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'getTime' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'toNativeDateTime' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			      'DateTime' => [
			        'times' => 0,
			        'getTimestamp' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForNowMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'now' => [
			        'toNative' => [
			          'getTimestamp' => '12:26:57',
			        ],
			        'sameValueAs' => true,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '21:34:07',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '17:11:11',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '19:20:02',
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'now' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'sameValueAs' => 0,
			        'getDate' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'getTime' => [
			          'times' => 0,
			          'toNative' => [
			            'times' => 0,
			            'getTimestamp' => 0,
			          ],
			        ],
			        'toNativeDateTime' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForSameValueAsMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'sameValueAs' => true,
			      'ValueObjectInterface' => [
			        'toNative' => 'repellendus',
			        'sameValueAs' => false,
			      ],
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForGetDateMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'getDate' => '2008-08-19',
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'getDate' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForGetTimeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'getTime' => '21:03:12',
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'getTime' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataForToNativeDateTimeMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      'toNativeDateTime' => '2015-09-21T22:19:16+00:00',
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'toNativeDateTime' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\UpdatedAt
     *
     * @return mixed[]
     */
    public function getDataFor__toStringMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'Date' => [
			        'toNative' => [
			          'getTimestamp' => '16:47:09',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:16:30',
			        ],
			      ],
			      '__toString' => 'occaecati',
			    ],
			    1 => [
			      'Date' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      'Time' => [
			        'times' => 0,
			        'toNative' => [
			          'times' => 0,
			          'getTimestamp' => 0,
			        ],
			      ],
			      '__toString' => 0,
			    ],
			  ],
			];
    }
}
