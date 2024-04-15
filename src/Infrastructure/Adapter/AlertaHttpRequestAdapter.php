<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Adapter;

use MicroModule\Base\Domain\Adapter\HttpRequestInterface;

/**
 * Class AlertaHttpRequestAdapter.
 */
class AlertaHttpRequestAdapter implements HttpRequestInterface
{
    /**
     * Alerta service host url.
     *
     * @var string
     */
    protected $alertaHost;

    /**
     * Alerta service auth token.
     *
     * @var string
     */
    protected $alertaToken;

    /**
     * AlertaHttpRequestAdapter constructor.
     */
    public function __construct(string $alertaHost, string $alertaToken)
    {
        $this->alertaHost = $alertaHost;
        $this->alertaToken = $alertaToken;
    }

    /**
     * Generate and return alerta service url.
     */
    public function getUrl(): string
    {
        return $this->alertaHost;
    }

    /**
     * Generate and return alerta service headers.
     *
     * @return string[]
     */
    public function getHeaders(): array
    {
        return ['Authorization' => 'Key ' . $this->alertaToken, 'Content-type' => self::RESPONSE_HEADER_CONTENT_TYPE_JSON];
    }
}
