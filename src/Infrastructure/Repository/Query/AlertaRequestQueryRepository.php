<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Infrastructure\Repository\Query;

use GuzzleHttp\Psr7\Utils;
use MicroModule\Alerting\Domain\Repository\Query\AlertingQueryRepositoryInterface;
use MicroModule\Base\Domain\Adapter\HttpRequestInterface;
use MicroModule\Base\Domain\Exception\InvalidResponseContentTypeException;
use MicroModule\Base\Domain\Exception\InvalidResponseStatusCodeException;
use MicroModule\Base\Domain\Exception\InvalidResponseStatusException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class AlertaRequestRepository.
 *
 * @category Infrastructure\Repository\Query
 *
 * @SuppressWarnings(PHPMD)
 */
class AlertaRequestQueryRepository implements AlertingQueryRepositoryInterface
{
    protected const ALERTA_ATTRIBUTES_TEMPLATE = [
        'attributes' => [
            'region' => 'EU',
        ],
        'correlate' => [
            'HttpServerError',
            'HttpServerOK',
        ],
        'environment' => 'Production',
        'event' => 'HttpServerError',
        'group' => 'Web',
        'origin' => 'curl',
        'resource' => 'default',
        'service' => [],
        'severity' => 'major',
        'tags' => [
            'dc1',
        ],
        'text' => '',
        'type' => 'exceptionAlert',
        'value' => '',
    ];

    /**
     * Http client object.
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Http request factory object.
     *
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * Http request builder.
     *
     * @var HttpRequestInterface
     */
    protected $httpRequestAdapter;

    /**
     * Alerta request attributes.
     *
     * @var mixed[]
     */
    protected $attributes;

    /**
     * RequestRepositoryRepository constructor.
     *
     * @param mixed[] $attributes
     */
    public function __construct(
        ClientInterface $client,
        RequestFactoryInterface $requestFactory,
        HttpRequestInterface $httpRequestAdapter,
        array $attributes = []
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->httpRequestAdapter = $httpRequestAdapter;
        $this->attributes = $attributes;
    }

    /**
     * Build http request, send it to affiliate network and evaluate http response.
     *
     * @param mixed[] $attributes
     *
     * @throws InvalidResponseContentTypeException
     * @throws InvalidResponseStatusCodeException
     * @throws InvalidResponseStatusException
     * @throws ClientExceptionInterface
     */
    public function sendAlert(string $alertMessage, array $attributes = []): bool
    {
        $httpRequest = $this->buildRequest($alertMessage, $attributes);
        $httpResponse = $this->client->sendRequest($httpRequest);

        if (HttpRequestInterface::RESPONSE_STATUS_CREATED !== $httpResponse->getStatusCode()) {
            throw new InvalidResponseStatusCodeException('Got invalid status code in response.');
        }

        $result = (string) $httpResponse->getBody();
        $result = json_decode($result, true);

        if (!$result) {
            throw new InvalidResponseContentTypeException('Invalid response content type.');
        }

        if (isset($result['alert']['status']) && self::ALERTA_RESPONSE_STATUS_OPEN !== $result['alert']['status']) {
            throw new InvalidResponseStatusException('Alert status should be open');
        }

        return true;
    }

    /**
     * Create and initialize http request.
     *
     * @param mixed[] $attributes
     */
    protected function buildRequest(string $alertMessage, array $attributes = []): RequestInterface
    {
        $url = $this->httpRequestAdapter->getUrl();
        $request = $this->requestFactory->createRequest(HttpRequestInterface::REQUEST_METHOD_POST, $url);
        $headers = $this->httpRequestAdapter->getHeaders();

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        $attributes = array_merge($this->attributes, $attributes);

        return $request->withBody($this->getBody($alertMessage, $attributes));
    }

    /**
     * Create json stream from alerta request body template.
     *
     * @param mixed[] $attributes
     */
    protected function getBody(string $alertMessage, array $attributes = []): StreamInterface
    {
        $body = $this->generateRequestAttributes($attributes);
        $body['text'] = $alertMessage;

        return Utils::streamFor(json_encode($body));
    }

    /**
     * Generate alerta request attributes.
     *
     * @param mixed[] $attributes
     *
     * @return mixed[]
     */
    protected function generateRequestAttributes(array $attributes = []): array
    {
        $request = self::ALERTA_ATTRIBUTES_TEMPLATE;

        if (array_key_exists('resource', $attributes)) {
            $request['resource'] = $attributes['resource'];
        }

        if (array_key_exists('service', $attributes)) {
            if (is_string($attributes['service'])) {
                $attributes['service'] = [$attributes['service']];
            }
            $request['service'] = $attributes['service'];
        }

        if (array_key_exists('environment', $attributes)) {
            $request['environment'] = $attributes['environment'];
        }

        if (array_key_exists('type', $attributes)) {
            $request['type'] = $attributes['type'];
        }

        if (array_key_exists('group', $attributes)) {
            $request['group'] = $attributes['group'];
        }

        if (array_key_exists('severity', $attributes)) {
            $request['severity'] = $attributes['severity'];
        }

        if (array_key_exists('tags', $attributes)) {
            if (is_string($attributes['tags'])) {
                $attributes['tags'] = [$attributes['tags']];
            }
            $request['tags'] = $attributes['tags'];
        }

        if (array_key_exists('attributes', $attributes)) {
            $request['attributes'] = $attributes['attributes'];
        }

        return $request;
    }
}
