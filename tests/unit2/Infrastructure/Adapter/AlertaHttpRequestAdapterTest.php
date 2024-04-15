<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Infrastructure\Adapter;

use MicroModule\Alerting\Infrastructure\Adapter\AlertaHttpRequestAdapter;
use MicroModule\Alerting\Tests\Unit\TestCase;

/**
 * Class AlertaHttpRequestAdapterTest.
 *
 * @category Tests\Unit\Infrastructure\Adapter
 */
class AlertaHttpRequestAdapterTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Adapter\AlertaHttpRequestAdapter::getUrl
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertaDataProvider::getAlertaCredentials()
     */
    public function getUrlTest(string $alertaHost, string $alertaToken, string $alertaUrl): void
    {
        $alertaHttpRequestAdapter = new AlertaHttpRequestAdapter($alertaHost, $alertaToken);
        self::assertSame($alertaUrl, $alertaHttpRequestAdapter->getUrl());
    }

    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Infrastructure\Adapter\AlertaHttpRequestAdapter::getHeaders
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertaDataProvider::getAlertaCredentials()
     *
     * @param mixed[] $alertaHeaders
     */
    public function getHeadersTest(string $alertaHost, string $alertaToken, string $alertaUrl, array $alertaHeaders): void
    {
        $alertaHttpRequestAdapter = new AlertaHttpRequestAdapter($alertaHost, $alertaToken);
        self::assertSame($alertaHeaders, $alertaHttpRequestAdapter->getHeaders());
    }
}
