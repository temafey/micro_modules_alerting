<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class AlertedAtDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'fromNative' => [
			        'toNative' => [
			          'getTimestamp' => '16:06:37',
			        ],
			        'sameValueAs' => true,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '07:01:02',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '19:27:01',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '17:45:46',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'fromNativeDateTime' => [
			        'toNative' => [
			          'getTimestamp' => '14:02:07',
			        ],
			        'sameValueAs' => false,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '02:29:02',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '09:53:32',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '15:58:59',
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			      'DateTime' => [
			        'getTimestamp' => '00:07:08',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'now' => [
			        'toNative' => [
			          'getTimestamp' => '15:26:06',
			        ],
			        'sameValueAs' => true,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '03:05:54',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '06:09:35',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '15:58:21',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'sameValueAs' => false,
			      'ValueObjectInterface' => [
			        'toNative' => 'laborum',
			        'sameValueAs' => true,
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'getDate' => '2004-01-07',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'getTime' => '21:46:52',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      'toNativeDateTime' => '1986-03-27T13:52:03+00:00',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\AlertedAt
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
			          'getTimestamp' => '23:07:38',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '15:47:55',
			        ],
			      ],
			      '__toString' => 'tempore',
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
