<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\DataProvider;

use Exception;

/**
 * Class AlertaDataProvider.
 *
 * @category Tests\Unit\DataProvider
 */
class AlertaDataProvider
{
    /**
     * Return alert data fixture.
     *
     * @return mixed[]
     *
     * @throws Exception
     */
    public function getAlertaCredentials(): array
    {
        return [
            [
                'https://alerta.localhost.net/api/alert',
                'token',
                'https://alerta.localhost.net/api/alert',
                ['Authorization' => 'Key token', 'Content-type' => 'application/json'],
            ],
            [
                'https://alerta.test.net:80/alert',
                '1234',
                'https://alerta.test.net:80/alert',
                ['Authorization' => 'Key 1234', 'Content-type' => 'application/json'],
            ],
            [
                'http://alerta.net:88/alert',
                'test1234',
                'http://alerta.net:88/alert',
                ['Authorization' => 'Key test1234', 'Content-type' => 'application/json'],
            ],
            [
                'https://alerta.localhost.net:0/alert',
                '',
                'https://alerta.localhost.net:0/alert',
                ['Authorization' => 'Key ', 'Content-type' => 'application/json'],
            ],
        ];
    }
}
