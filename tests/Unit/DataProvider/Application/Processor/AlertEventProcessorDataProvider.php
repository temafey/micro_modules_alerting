<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor;

/**
 * DataProvider for class {testClassName}
 *
 * @package MicroModule\Alerting\Tests\Unit\DataProvider\Application\Processor
 */
class AlertEventProcessorDataProvider
{
    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForProcessMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'process' => NULL,
			      'Message' => [
			        'getBody' => 'facere',
			        'setBody' => NULL,
			        'setProperties' => NULL,
			        'getProperties' => 'vel',
			        'setProperty' => NULL,
			        'getProperty' => 'vel',
			        'setHeaders' => NULL,
			        'getHeaders' => 'vel',
			        'setHeader' => NULL,
			        'getHeader' => 'vel',
			        'setRedelivered' => NULL,
			        'isRedelivered' => true,
			        'setCorrelationId' => NULL,
			        'getCorrelationId' => 'facere',
			        'setMessageId' => NULL,
			        'getMessageId' => 'facere',
			        'getTimestamp' => '04:24:39',
			        'setTimestamp' => '18:04:10',
			        'setReplyTo' => NULL,
			        'getReplyTo' => 'facere',
			      ],
			      'Context' => [
			        'createMessage' => [
			          'getBody' => 'magnam',
			          'setBody' => NULL,
			          'setProperties' => NULL,
			          'getProperties' => 'atque',
			          'setProperty' => NULL,
			          'getProperty' => 'atque',
			          'setHeaders' => NULL,
			          'getHeaders' => 'atque',
			          'setHeader' => NULL,
			          'getHeader' => 'atque',
			          'setRedelivered' => NULL,
			          'isRedelivered' => true,
			          'setCorrelationId' => NULL,
			          'getCorrelationId' => 'magnam',
			          'setMessageId' => NULL,
			          'getMessageId' => 'magnam',
			          'getTimestamp' => '05:27:49',
			          'setTimestamp' => '19:08:26',
			          'setReplyTo' => NULL,
			          'getReplyTo' => 'magnam',
			        ],
			        'createTopic' => [
			          'getTopicName' => 'Hollie Murphy',
			        ],
			        'createQueue' => [
			          'getQueueName' => 'Westley Sanford DDS',
			        ],
			        'createTemporaryQueue' => [
			          'getQueueName' => 'Miss Lou Hoppe',
			        ],
			        'createProducer' => [
			          'send' => NULL,
			          'getDeliveryDelay' => 2,
			          'getPriority' => 2,
			          'getTimeToLive' => '14:23:35',
			        ],
			        'createConsumer' => [
			          'getQueue' => [
			            'getQueueName' => 'Warren Jones',
			          ],
			          'receive' => [
			            'getBody' => 'iusto',
			            'setBody' => NULL,
			            'setProperties' => NULL,
			            'getProperties' => 'ratione',
			            'setProperty' => NULL,
			            'getProperty' => 'ratione',
			            'setHeaders' => NULL,
			            'getHeaders' => 'ratione',
			            'setHeader' => NULL,
			            'getHeader' => 'ratione',
			            'setRedelivered' => NULL,
			            'isRedelivered' => false,
			            'setCorrelationId' => NULL,
			            'getCorrelationId' => 'iusto',
			            'setMessageId' => NULL,
			            'getMessageId' => 'iusto',
			            'getTimestamp' => '05:40:40',
			            'setTimestamp' => '03:24:39',
			            'setReplyTo' => NULL,
			            'getReplyTo' => 'iusto',
			          ],
			          'receiveNoWait' => [
			            'getBody' => 'ut',
			            'setBody' => NULL,
			            'setProperties' => NULL,
			            'getProperties' => 'sunt',
			            'setProperty' => NULL,
			            'getProperty' => 'sunt',
			            'setHeaders' => NULL,
			            'getHeaders' => 'sunt',
			            'setHeader' => NULL,
			            'getHeader' => 'sunt',
			            'setRedelivered' => NULL,
			            'isRedelivered' => true,
			            'setCorrelationId' => NULL,
			            'getCorrelationId' => 'ut',
			            'setMessageId' => NULL,
			            'getMessageId' => 'ut',
			            'getTimestamp' => '20:09:21',
			            'setTimestamp' => '14:23:30',
			            'setReplyTo' => NULL,
			            'getReplyTo' => 'ut',
			          ],
			          'acknowledge' => NULL,
			          'reject' => NULL,
			        ],
			        'createSubscriptionConsumer' => [
			          'consume' => NULL,
			          'subscribe' => NULL,
			          'unsubscribe' => NULL,
			          'unsubscribeAll' => NULL,
			        ],
			        'purgeQueue' => NULL,
			        'close' => NULL,
			      ],
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'process' => 0,
			      'Message' => [
			        'times' => 0,
			        'getBody' => 0,
			        'setBody' => 0,
			        'setProperties' => 0,
			        'getProperties' => 0,
			        'setProperty' => 0,
			        'getProperty' => 0,
			        'setHeaders' => 0,
			        'getHeaders' => 0,
			        'setHeader' => 0,
			        'getHeader' => 0,
			        'setRedelivered' => 0,
			        'isRedelivered' => 0,
			        'setCorrelationId' => 0,
			        'getCorrelationId' => 0,
			        'setMessageId' => 0,
			        'getMessageId' => 0,
			        'getTimestamp' => 0,
			        'setTimestamp' => 0,
			        'setReplyTo' => 0,
			        'getReplyTo' => 0,
			      ],
			      'Context' => [
			        'times' => 0,
			        'createMessage' => [
			          'times' => 0,
			          'getBody' => 0,
			          'setBody' => 0,
			          'setProperties' => 0,
			          'getProperties' => 0,
			          'setProperty' => 0,
			          'getProperty' => 0,
			          'setHeaders' => 0,
			          'getHeaders' => 0,
			          'setHeader' => 0,
			          'getHeader' => 0,
			          'setRedelivered' => 0,
			          'isRedelivered' => 0,
			          'setCorrelationId' => 0,
			          'getCorrelationId' => 0,
			          'setMessageId' => 0,
			          'getMessageId' => 0,
			          'getTimestamp' => 0,
			          'setTimestamp' => 0,
			          'setReplyTo' => 0,
			          'getReplyTo' => 0,
			        ],
			        'createTopic' => [
			          'times' => 0,
			          'getTopicName' => 0,
			        ],
			        'createQueue' => [
			          'times' => 0,
			          'getQueueName' => 0,
			        ],
			        'createTemporaryQueue' => [
			          'times' => 0,
			          'getQueueName' => 0,
			        ],
			        'createProducer' => [
			          'times' => 0,
			          'send' => 0,
			          'getDeliveryDelay' => 0,
			          'getPriority' => 0,
			          'getTimeToLive' => 0,
			        ],
			        'createConsumer' => [
			          'times' => 0,
			          'getQueue' => [
			            'times' => 0,
			            'getQueueName' => 0,
			          ],
			          'receive' => [
			            'times' => 0,
			            'getBody' => 0,
			            'setBody' => 0,
			            'setProperties' => 0,
			            'getProperties' => 0,
			            'setProperty' => 0,
			            'getProperty' => 0,
			            'setHeaders' => 0,
			            'getHeaders' => 0,
			            'setHeader' => 0,
			            'getHeader' => 0,
			            'setRedelivered' => 0,
			            'isRedelivered' => 0,
			            'setCorrelationId' => 0,
			            'getCorrelationId' => 0,
			            'setMessageId' => 0,
			            'getMessageId' => 0,
			            'getTimestamp' => 0,
			            'setTimestamp' => 0,
			            'setReplyTo' => 0,
			            'getReplyTo' => 0,
			          ],
			          'receiveNoWait' => [
			            'times' => 0,
			            'getBody' => 0,
			            'setBody' => 0,
			            'setProperties' => 0,
			            'getProperties' => 0,
			            'setProperty' => 0,
			            'getProperty' => 0,
			            'setHeaders' => 0,
			            'getHeaders' => 0,
			            'setHeader' => 0,
			            'getHeader' => 0,
			            'setRedelivered' => 0,
			            'isRedelivered' => 0,
			            'setCorrelationId' => 0,
			            'getCorrelationId' => 0,
			            'setMessageId' => 0,
			            'getMessageId' => 0,
			            'getTimestamp' => 0,
			            'setTimestamp' => 0,
			            'setReplyTo' => 0,
			            'getReplyTo' => 0,
			          ],
			          'acknowledge' => 0,
			          'reject' => 0,
			        ],
			        'createSubscriptionConsumer' => [
			          'times' => 0,
			          'consume' => 0,
			          'subscribe' => 0,
			          'unsubscribe' => 0,
			          'unsubscribeAll' => 0,
			        ],
			        'purgeQueue' => 0,
			        'close' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForGetSubscribedCommandMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'getSubscribedCommand' => 'eius',
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'getSubscribedCommand' => 0,
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForSetLoggerMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'setLogger' => [
			        'process' => NULL,
			        'getExceptionLevel' => 5,
			        'getExceptionMessage' => 'eos',
			        'getParentException' => [
			          'getMessage' => 'et',
			          'getCode' => 'eaque',
			          'getFile' => 'et',
			          'getLine' => 2,
			          'getTrace' => 'eaque',
			          'getTraceAsString' => 'et',
			        ],
			        'getParentExceptionContext' => 'Ut ea vero ad aperiam voluptatem. Tempore quia et et magnam animi velit. Porro eius sapiente provident dolor dolorem omnis asperiores. Eos dolor ut et libero est itaque qui accusamus.',
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			      'LoggerInterface' => [
			        'emergency' => NULL,
			        'alert' => NULL,
			        'critical' => NULL,
			        'error' => NULL,
			        'warning' => NULL,
			        'notice' => NULL,
			        'info' => NULL,
			        'debug' => NULL,
			        'log' => NULL,
			      ],
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'setLogger' => [
			        'times' => 0,
			        'process' => 0,
			        'getExceptionLevel' => 0,
			        'getExceptionMessage' => 0,
			        'getParentException' => [
			          'times' => 0,
			          'getMessage' => 0,
			          'getCode' => 0,
			          'getFile' => 0,
			          'getLine' => 0,
			          'getTrace' => 0,
			          'getTraceAsString' => 0,
			        ],
			        'getParentExceptionContext' => 0,
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			      'LoggerInterface' => [
			        'times' => 0,
			        'emergency' => 0,
			        'alert' => 0,
			        'critical' => 0,
			        'error' => 0,
			        'warning' => 0,
			        'notice' => 0,
			        'info' => 0,
			        'debug' => 0,
			        'log' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForLogMessageMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'logMessage' => [
			        'process' => NULL,
			        'getExceptionLevel' => 1,
			        'getExceptionMessage' => 'id',
			        'getParentException' => [
			          'getMessage' => 'quas',
			          'getCode' => 'quibusdam',
			          'getFile' => 'quas',
			          'getLine' => 8,
			          'getTrace' => 'quibusdam',
			          'getTraceAsString' => 'quas',
			        ],
			        'getParentExceptionContext' => 'Officiis culpa sed facere eum. Corporis ut esse modi nemo totam. A consectetur alias numquam dignissimos doloribus soluta. Modi in magni aliquam sed aut magnam iste.',
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			      'message' => 'nostrum',
			      'level' => 4,
			      'context' => 'Quibusdam non sint nesciunt hic aperiam. Ipsa porro ut nam voluptatem nulla aperiam minus. Ipsa est repudiandae vel perspiciatis. Ut modi tenetur tempore dolores eligendi recusandae ut veritatis.',
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'logMessage' => [
			        'times' => 0,
			        'process' => 0,
			        'getExceptionLevel' => 0,
			        'getExceptionMessage' => 0,
			        'getParentException' => [
			          'times' => 0,
			          'getMessage' => 0,
			          'getCode' => 0,
			          'getFile' => 0,
			          'getLine' => 0,
			          'getTrace' => 0,
			          'getTraceAsString' => 0,
			        ],
			        'getParentExceptionContext' => 0,
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForLogExceptionMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'logException' => [
			        'process' => NULL,
			        'getExceptionLevel' => 8,
			        'getExceptionMessage' => 'velit',
			        'getParentException' => [
			          'getMessage' => 'dignissimos',
			          'getCode' => 'laboriosam',
			          'getFile' => 'dignissimos',
			          'getLine' => 6,
			          'getTrace' => 'laboriosam',
			          'getTraceAsString' => 'dignissimos',
			        ],
			        'getParentExceptionContext' => 'Atque pariatur a temporibus est hic iure. Facere ipsam omnis cum voluptatibus esse sint quis. Aut fuga enim repellendus ut amet vitae.',
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			      'Throwable' => [
			        'getMessage' => 'explicabo',
			        'getCode' => 'deleniti',
			        'getFile' => 'explicabo',
			        'getLine' => 8,
			        'getTrace' => 'deleniti',
			        'getTraceAsString' => 'explicabo',
			      ],
			      'level' => 1,
			      'message' => 'eaque',
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'logException' => [
			        'times' => 0,
			        'process' => 0,
			        'getExceptionLevel' => 0,
			        'getExceptionMessage' => 0,
			        'getParentException' => [
			          'times' => 0,
			          'getMessage' => 0,
			          'getCode' => 0,
			          'getFile' => 0,
			          'getLine' => 0,
			          'getTrace' => 0,
			          'getTraceAsString' => 0,
			        ],
			        'getParentExceptionContext' => 0,
			        'className' => 'MicroModule\\Alerting\\Application\\Processor\\AlertEventProcessor',
			      ],
			      'Throwable' => [
			        'times' => 0,
			        'getMessage' => 0,
			        'getCode' => 0,
			        'getFile' => 0,
			        'getLine' => 0,
			        'getTrace' => 0,
			        'getTraceAsString' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForGetExceptionLevelMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'getExceptionLevel' => 3,
			      'Throwable' => [
			        'getMessage' => 'explicabo',
			        'getCode' => 'beatae',
			        'getFile' => 'explicabo',
			        'getLine' => 6,
			        'getTrace' => 'beatae',
			        'getTraceAsString' => 'explicabo',
			      ],
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'getExceptionLevel' => 0,
			      'Throwable' => [
			        'times' => 0,
			        'getMessage' => 0,
			        'getCode' => 0,
			        'getFile' => 0,
			        'getLine' => 0,
			        'getTrace' => 0,
			        'getTraceAsString' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForGetExceptionMessageMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'getExceptionMessage' => 'aut',
			      'Throwable' => [
			        'getMessage' => 'quasi',
			        'getCode' => 'cupiditate',
			        'getFile' => 'quasi',
			        'getLine' => 2,
			        'getTrace' => 'cupiditate',
			        'getTraceAsString' => 'quasi',
			      ],
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'getExceptionMessage' => 0,
			      'Throwable' => [
			        'times' => 0,
			        'getMessage' => 0,
			        'getCode' => 0,
			        'getFile' => 0,
			        'getLine' => 0,
			        'getTrace' => 0,
			        'getTraceAsString' => 0,
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForGetParentExceptionMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'getParentException' => [
			        'getMessage' => 'voluptas',
			        'getCode' => 'assumenda',
			        'getFile' => 'voluptas',
			        'getLine' => 1,
			        'getTrace' => 'assumenda',
			        'getTraceAsString' => 'voluptas',
			        'className' => 'Throwable',
			      ],
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'getParentException' => [
			        'times' => 0,
			        'getMessage' => 0,
			        'getCode' => 0,
			        'getFile' => 0,
			        'getLine' => 0,
			        'getTrace' => 0,
			        'getTraceAsString' => 0,
			        'className' => 'Throwable',
			      ],
			    ],
			  ],
			];
    }

    /**
     * Return test data for MicroModule\Alerting\Application\Processor\AlertEventProcessor
     *
     * @return mixed[]
     */
    public function getDataForGetParentExceptionContextMethod(): array
    {
        return [
			  0 => [
			    0 => [
			      'AlertingProcessorInterface' => [
			        'handleAlert' => false,
			      ],
			      'AlertingRepositoryInterface' => [
			        'get' => [
			          'getId' => [
			            'toNative' => 'aut',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityType' => [
			            'toNative' => 'explicabo',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Kendra Strosin',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'sint',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityUuid' => [
			            'toNative' => '9c667965-0abe-3abf-94e5-8e1d5895ea74',
			            'getUuid' => [
			              'toString' => 'a7fda357-2251-3fa2-8ce6-c1ea5992c145',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'eos',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'ut',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => false,
			            'toNative' => 5,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 7,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => true,
			            'toNative' => 1,
			            'inc' => [
			              'sameValueAs' => false,
			              'toNative' => 7,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '01:49:25',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '12:32:34',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '12:25:17',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '03:39:07',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '00:09:20',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '14:36:21',
			            ],
			          ],
			          'serialize' => [
			            0 => 'non',
			            1 => 'eveniet',
			            2 => 'maxime',
			          ],
			        ],
			        'getById' => [
			          'getId' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getEntityType' => [
			            'toNative' => 'et',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getProjectName' => [
			            'toNative' => 'Prof. Casimer Cronin PhD',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionClass' => [
			            'toNative' => 'odit',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getEntityUuid' => [
			            'toNative' => 'f30962fe-661f-3674-b025-4d177684d832',
			            'getUuid' => [
			              'toString' => '9a55e0c8-ed81-3053-ad45-139ebe91e95f',
			            ],
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getExceptionType' => [
			            'toNative' => 'architecto',
			            'sameValueAs' => true,
			            'isEmpty' => true,
			          ],
			          'getExceptionMessage' => [
			            'toNative' => 'unde',
			            'sameValueAs' => false,
			            'isEmpty' => false,
			          ],
			          'getStatus' => [
			            'sameValueAs' => true,
			            'toNative' => 7,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 4,
			            ],
			            'decr' => [
			              'sameValueAs' => false,
			              'toNative' => 1,
			            ],
			          ],
			          'getRepetitions' => [
			            'sameValueAs' => false,
			            'toNative' => 4,
			            'inc' => [
			              'sameValueAs' => true,
			              'toNative' => 8,
			            ],
			            'decr' => [
			              'sameValueAs' => true,
			              'toNative' => 5,
			            ],
			          ],
			          'getCreatedAt' => [
			            'toNative' => [
			              'getTimestamp' => '23:14:47',
			            ],
			            'sameValueAs' => false,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '17:25:39',
			            ],
			          ],
			          'getUpdateAt' => [
			            'toNative' => [
			              'getTimestamp' => '19:36:04',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '19:38:03',
			            ],
			          ],
			          'getAlertedAt' => [
			            'toNative' => [
			              'getTimestamp' => '13:57:29',
			            ],
			            'sameValueAs' => true,
			            'getDate' => [
			              'toNative' => [
			              ],
			            ],
			            'getTime' => [
			              'toNative' => [
			              ],
			            ],
			            'toNativeDateTime' => [
			              'getTimestamp' => '23:50:11',
			            ],
			          ],
			          'serialize' => [
			            0 => 'inventore',
			            1 => 'eligendi',
			            2 => 'ab',
			          ],
			        ],
			        'exists' => true,
			        'store' => 'suscipit',
			      ],
			      'getParentExceptionContext' => [
			        0 => 'Enim rerum atque vero quia dicta eius. Et harum voluptas at. Temporibus facilis dignissimos et quo.',
			      ],
			      'context' => 'Asperiores tenetur dolorem voluptatem commodi quae consectetur. Sequi reiciendis ullam nihil excepturi nostrum. Voluptate voluptates nihil aut qui. Sit labore et qui enim.',
			      'contextSerializeType' => 'Vero culpa deserunt est non alias recusandae. Ut dolorum omnis sed est dolorem. Non et voluptatem voluptatem.',
			    ],
			    1 => [
			      'AlertingProcessorInterface' => [
			        'times' => 0,
			        'handleAlert' => 0,
			      ],
			      'AlertingRepositoryInterface' => [
			        'times' => 0,
			        'get' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'getById' => [
			          'times' => 0,
			          'getId' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getProjectName' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionClass' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getEntityUuid' => [
			            'times' => 0,
			            'toNative' => 0,
			            'getUuid' => [
			              'times' => 0,
			              'toString' => 0,
			            ],
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionType' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getExceptionMessage' => [
			            'times' => 0,
			            'toNative' => 0,
			            'sameValueAs' => 0,
			            'isEmpty' => 0,
			          ],
			          'getStatus' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getRepetitions' => [
			            'times' => 0,
			            'sameValueAs' => 0,
			            'toNative' => 0,
			            'inc' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			            'decr' => [
			              'times' => 0,
			              'sameValueAs' => 0,
			              'toNative' => 0,
			            ],
			          ],
			          'getCreatedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getUpdateAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'getAlertedAt' => [
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
			              ],
			            ],
			            'getTime' => [
			              'times' => 0,
			              'toNative' => [
			                'times' => 0,
			              ],
			            ],
			            'toNativeDateTime' => [
			              'times' => 0,
			              'getTimestamp' => 0,
			            ],
			          ],
			          'serialize' => 0,
			        ],
			        'exists' => 0,
			        'store' => 0,
			      ],
			      'getParentExceptionContext' => 0,
			    ],
			  ],
			];
    }
}
