<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider;

use Exception;

/**
 * Class AlertingDataProvider.
 *
 * @category Tests\Unit\DataProvider
 */
class AlertingDataProvider
{
    /**
     * Return alert data fixture.
     *
     * @return mixed[]
     *
     * @throws Exception
     */
    public function getAlertingData(): array
    {
        return [
            [
                '0f07097658b257e87e06ea4ca17203e2911c63e1',
                'micro-module-alerting',
                'DataGate\\AffiliateNetwork\\ShareASale\\Application\\Command\\Program\\Validate\\ValidateCommand',
                'd299918d-8428-44e0-883e-47003ab99563',
                'error',
                'DataGate\\AffiliateNetwork\\ShareASale\\Domain\\Exception\\Program\\NotJoinedException',
                'Uncaught PHP Exception DataGate\\AffiliateNetwork\\ShareASale\\Domain\\Exception\\Program\\NotJoinedException: "Program with id \'83500\' not approved." at /app/src/Domain/Entity/ProgramEntity.php line 195',
                [
                    'id' => '0f07097658b257e87e06ea4ca17203e2911c63e1',
                    'projectName' => 'micro-module-alerting',
                    'entityType' => 'DataGate\\AffiliateNetwork\\ShareASale\\Application\\Command\\Program\\Validate\\ValidateCommand',
                    'entityUuid' => 'd299918d-8428-44e0-883e-47003ab99563',
                    'exceptionType' => 'error',
                    'exceptionClass' => 'DataGate\\AffiliateNetwork\\ShareASale\\Domain\\Exception\\Program\\NotJoinedException',
                    'exceptionMessage' => 'Uncaught PHP Exception DataGate\\AffiliateNetwork\\ShareASale\\Domain\\Exception\\Program\\NotJoinedException: "Program with id \'83500\' not approved." at /app/src/Domain/Entity/ProgramEntity.php line 195',
                    'repetitions' => 1,
                    'status' => 0,
                    'createdAt' => '2019-03-29 20:10:00',
                    'updatedAt' => null,
                    'alertedAt' => null,
                ],
                1,
                0,
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                ['getId' => 0, 'getProjectName' => 0, 'getEntityType' => 0, 'getEntityUuid' => 0, 'getExceptionType' => 1, 'getExceptionClass' => 0, 'getExceptionMessage' => 0, 'getRepetitions' => 1, 'getStatus' => 1, 'setStatus' => 0, 'getCreatedAt' => 0, 'getUpdatedAt' => 0, 'getAlertedAt' => 0, 'setAlertedAt' => 0, 'sendAlert' => 0, 'store' => 0],
            ],
            [
                '4bb5d24c1de4dc9a5fbc702199197c05ba708849',
                'micro-module-alerting',
                '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                'd785bed6-1659-4ad7-9def-962862af53fc',
                'error',
                'TypeError',
                'Uncaught PHP Exception TypeError: "Argument 1 passed to \\Application\\Command\\Program\\Run\\RunCommand::__construct() must be of the type int, string given, called in /Application/Command/ProgramCollectionSaga.php on line 186" at /Application/Command/Program/Run/RunCommand.php line 38',
                [
                    'id' => '4bb5d24c1de4dc9a5fbc702199197c05ba708849',
                    'projectName' => 'micro-module-alerting',
                    'entityType' => '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                    'entityUuid' => 'd785bed6-1659-4ad7-9def-962862af53fc',
                    'exceptionType' => 'error',
                    'exceptionClass' => 'TypeError',
                    'exceptionMessage' => 'Uncaught PHP Exception TypeError: "Argument 1 passed to \\Application\\Command\\Program\\Run\\RunCommand::__construct() must be of the type int, string given, called in /Application/Command/ProgramCollectionSaga.php on line 186" at /Application/Command/Program/Run/RunCommand.php line 38',
                    'repetitions' => 1,
                    'status' => 0,
                    'createdAt' => '2019-03-29 20:10:00',
                    'updatedAt' => null,
                    'alertedAt' => null,
                ],
                1,
                0,
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                ['getId' => 0, 'getProjectName' => 0, 'getEntityType' => 0, 'getEntityUuid' => 0, 'getExceptionType' => 1, 'getExceptionClass' => 0, 'getExceptionMessage' => 0, 'getRepetitions' => 1, 'getStatus' => 1, 'setStatus' => 0, 'getCreatedAt' => 0, 'getUpdatedAt' => 0, 'getAlertedAt' => 0, 'setAlertedAt' => 0, 'sendAlert' => 0, 'store' => 0],
            ],
            [
                '5739a43c8713952a0a86a8fd7734729b52b3fc24',
                'micro-module-alerting',
                '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                '7bd58997-cbd4-4a48-a068-f821d8408391',
                'critical',
                'CriticalException',
                'Uncaught PHP Exception CriticalException: "test critical" at /Application/Command/Program/Run/RunCommand.php line 41',
                [
                    'id' => '5739a43c8713952a0a86a8fd7734729b52b3fc24',
                    'projectName' => 'micro-module-alerting',
                    'entityType' => '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                    'entityUuid' => '7bd58997-cbd4-4a48-a068-f821d8408391',
                    'exceptionType' => 'critical',
                    'exceptionClass' => 'CriticalException',
                    'exceptionMessage' => 'Uncaught PHP Exception CriticalException: "test critical" at /Application/Command/Program/Run/RunCommand.php line 41',
                    'repetitions' => 1,
                    'status' => 0,
                    'createdAt' => '2019-03-29 20:10:00',
                    'updatedAt' => null,
                    'alertedAt' => null,
                ],
                1,
                0,
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                ['getId' => 0, 'getProjectName' => 0, 'getEntityType' => 0, 'getEntityUuid' => 0, 'getExceptionType' => 1, 'getExceptionClass' => 0, 'getExceptionMessage' => 1, 'getRepetitions' => 0, 'getStatus' => 1, 'setStatus' => 1, 'getCreatedAt' => 0, 'getUpdatedAt' => 0, 'getAlertedAt' => 0, 'setAlertedAt' => 1, 'sendAlert' => 1, 'store' => 1],
            ],
            [
                '8056a679af74b2a4f6b4d69af9d36bbd55d8a9f2',
                'micro-module-alerting',
                '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                'd975d108-4b46-4561-b5f1-c812fcf8e146',
                'emergency',
                'EmergencyException',
                'Uncaught PHP Exception EmergencyException: "test critical" at /Application/Command/Program/Run/RunCommand.php line 42',
                [
                    'id' => '8056a679af74b2a4f6b4d69af9d36bbd55d8a9f2',
                    'projectName' => 'micro-module-alerting',
                    'entityType' => '\\Application\\Command\\ProgramCollection\\Aggregate\\AggregateCommand',
                    'entityUuid' => 'd975d108-4b46-4561-b5f1-c812fcf8e146',
                    'exceptionType' => 'emergency',
                    'exceptionClass' => 'EmergencyException',
                    'exceptionMessage' => 'Uncaught PHP Exception EmergencyException: "test critical" at /Application/Command/Program/Run/RunCommand.php line 42',
                    'repetitions' => 1,
                    'status' => 0,
                    'createdAt' => '2019-03-29 20:10:00',
                    'updatedAt' => null,
                    'alertedAt' => null,
                ],
                1,
                0,
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                '2019-03-29 20:10:00',
                ['getId' => 0, 'getProjectName' => 0, 'getEntityType' => 0, 'getEntityUuid' => 0, 'getExceptionType' => 1, 'getExceptionClass' => 0, 'getExceptionMessage' => 1, 'getRepetitions' => 0, 'getStatus' => 1, 'setStatus' => 1, 'getCreatedAt' => 0, 'getUpdatedAt' => 0, 'getAlertedAt' => 0, 'setAlertedAt' => 1, 'sendAlert' => 1, 'store' => 1],
            ],
        ];
    }
}
