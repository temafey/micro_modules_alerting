<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Domain\Factory;

use Exception;
use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\Alerting\Domain\Factory\AlertingFactory;
use MicroModule\Alerting\Tests\Unit\TestCase;

/**
 * Class AlertingFactoryTest.
 *
 * @category Tests\Unit\Domain\Factory
 */
class AlertingFactoryTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Factory\AlertingFactory::makeInstance
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws Exception
     */
    public function createTest(
        string $id,
        string $projectName,
        string $entityType,
        string $entityUuid,
        string $exceptionType,
        string $exceptionClass,
        string $exceptionMessage
    ): void {
        $factory = new AlertingFactory();
        $alertingEntity = $factory->makeInstance($projectName, $entityType, $entityUuid, $exceptionType, $exceptionClass, $exceptionMessage);
        self::assertInstanceOf(AlertingEntity::class, $alertingEntity);
        self::assertSame($id, $alertingEntity->getId()->toNative());
    }
}
