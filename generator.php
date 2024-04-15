<?php

use MicroModule\Alerting\Domain\Entity\AlertingEntity;
use MicroModule\UnitTestGenerator\Generator\DataProviderGenerator;
use MicroModule\UnitTestGenerator\Generator\Mock\Mockery;
use MicroModule\UnitTestGenerator\Service\TestProject;
use MicroModule\ValueObject\DateTime\Date;
use MicroModule\ValueObject\DateTime\Time;
use Ramsey\Uuid\UuidInterface;

set_time_limit(0);

require 'vendor/autoload.php';

$excludeMethods = [
    'fromNative',
    'fromArray',
    'toReal',
    'toNatural',
    'toInteger',
    '__toString',
    '__clone',
    '__wakeup',
    '__callStatic',
    DateTime::class => [
        'all_except' => ['toNative', 'getTimestamp'],
    ],
    ArrayIterator::class,
    UuidInterface::class => [
        'all_except' => ['toString'],
    ],
    Time::class => [
        'all_except' => ['toNative'],
    ],
    Date::class => [
        'all_except' => ['toNative'],
    ],
    AlertingEntity::class => [
        'all_except' => array_merge(getPublicDeclaredClassMethods(AlertingEntity::class), ['getUncommittedEvents']),
    ],
];
DataProviderGenerator::setExcludeMethods($excludeMethods);
Mockery::setExcludeMethods($excludeMethods);
$testGenerator = new TestProject( 'src', ['Migrations', 'Presentation', 'Exception']);
$testGenerator->generate();


function getPublicDeclaredClassMethods(string $className): array
{
    $class = new ReflectionClass($className);

    return array_map(
        static function (ReflectionMethod $method) {
            return $method->getName();
        },
        array_filter($class->getMethods(ReflectionMethod::IS_PUBLIC), static function (ReflectionMethod $method) use ($class) {
            return $method->class === $class->getName();
        })
    );
}
