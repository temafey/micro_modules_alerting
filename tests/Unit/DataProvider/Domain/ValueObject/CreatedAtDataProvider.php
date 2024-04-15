<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Domain\ValueObject
 */
class CreatedAtDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'fromNative' => [
			        'toNative' => [
			          'getTimestamp' => '00:49:33',
			        ],
			        'sameValueAs' => false,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '03:00:35',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '14:25:16',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '11:58:11',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'fromNativeDateTime' => [
			        'toNative' => [
			          'getTimestamp' => '13:47:07',
			        ],
			        'sameValueAs' => false,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '21:02:14',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '01:30:34',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '07:59:26',
			        ],
			        'className' => 'MicroModule\\ValueObject\\DateTime\\DateTime',
			      ],
			      'DateTime' => [
			        'getTimestamp' => '17:46:15',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'now' => [
			        'toNative' => [
			          'getTimestamp' => '12:26:49',
			        ],
			        'sameValueAs' => false,
			        'getDate' => [
			          'toNative' => [
			            'getTimestamp' => '02:59:16',
			          ],
			        ],
			        'getTime' => [
			          'toNative' => [
			            'getTimestamp' => '03:18:38',
			          ],
			        ],
			        'toNativeDateTime' => [
			          'getTimestamp' => '03:08:32',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'sameValueAs' => true,
			      'ValueObjectInterface' => [
			        'toNative' => 'est',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'getDate' => '1996-09-10',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'getTime' => '00:29:31',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      'toNativeDateTime' => '1981-11-10T11:01:33+00:00',
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
     * Return test data for MicroModule\Alerting\Domain\ValueObject\CreatedAt
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
			          'getTimestamp' => '19:23:47',
			        ],
			      ],
			      'Time' => [
			        'toNative' => [
			          'getTimestamp' => '04:34:20',
			        ],
			      ],
			      '__toString' => 'ut',
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
