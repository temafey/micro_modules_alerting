<?php

declare(strict_types=1);

namespace MicroModule\Alerting\Tests\Unit\Infrastructure\Repository\Query;

use MicroModule\Alerting\Domain\Repository\Query\AlertingQueryRepositoryInterface;
use MicroModule\Alerting\Infrastructure\Repository\Query\AlertaRequestQueryRepository;
use MicroModule\Alerting\Tests\Unit\TestCase;
use MicroModule\Base\Domain\Adapter\HttpRequestInterface;
use MicroModule\Base\Domain\Exception\InvalidResponseContentTypeException;
use MicroModule\Base\Domain\Exception\InvalidResponseStatusCodeException;
use MicroModule\Base\Domain\Exception\InvalidResponseStatusException;
use Mockery;
use Mockery\MockInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AlertaRequestQueryRepositoryTest.
 *
 * @category Tests\Unit\Infrastructure\Event\Consumer
 */
class AlertaRequestQueryRepositoryTest extends TestCase
{
    /**
     * @test
     *
     * @group unit
     *
     * @covers       \MicroModule\Alerting\Domain\Repository\Query\AlertingQueryRepositoryInterface::sendAlert
     *
     * @dataProvider \MicroModule\Alerting\Tests\Unit\DataProvider\AlertingDataProvider::getAlertingData
     *
     * @throws InvalidResponseContentTypeException
     * @throws InvalidResponseStatusCodeException
     * @throws InvalidResponseStatusException
     * @throws ClientExceptionInterface
     */
    public function sendAlertTest(string $exceptionMessage): void
    {
        $clientMock = $this->makeHttpClientMock();
        $requestFactoryMock = $this->makeHttpFactoryMock();
        $httpRequestMock = $this->makeMicroHttpRequestMock();
        $alertingRepository = new AlertaRequestQueryRepository($clientMock, $requestFactoryMock, $httpRequestMock);

        self::assertInstanceOf(AlertingQueryRepositoryInterface::class, $alertingRepository);
        self::assertTrue($alertingRepository->sendAlert($exceptionMessage));
    }

    /**
     * Make and return HttpResponse mock object.
     */
    private function makeHttpResponseMock(): MockInterface
    {
        $responseMock = Mockery::mock(ResponseInterface::class);
        $responseMock
            ->shouldReceive('getStatusCode')
            ->times(1)
            ->andReturn(HttpRequestInterface::RESPONSE_STATUS_CREATED);
        $responseMock
            ->shouldReceive('getBody')
            ->times(1)
            ->andReturn(json_encode(['alert' => ['status' => AlertingQueryRepositoryInterface::ALERTA_RESPONSE_STATUS_OPEN]]));

        return $responseMock;
    }

    /**
     * Make and return HttpRequest mock object.
     */
    private function makeHttpRequestMock(): MockInterface
    {
        $requestMock = Mockery::mock(RequestInterface::class);
        $requestMock
            ->shouldReceive('withHeader')
            ->times(2)
            ->andReturn($requestMock);
        $requestMock
            ->shouldReceive('withBody')
            ->times(1)
            ->andReturn($requestMock);

        return $requestMock;
    }

    /**
     * Make and return HttpClient mock object.
     */
    private function makeHttpClientMock(): MockInterface
    {
        $responseMock = $this->makeHttpResponseMock();
        $clientMock = Mockery::mock(ClientInterface::class);
        $clientMock
            ->shouldReceive('sendRequest')
            ->times(1)
            ->andReturn($responseMock);

        return $clientMock;
    }

    /**
     * Make and return HttpRequestFactory mock object.
     *
     * @return MockInterface
     */
    private function makeHttpFactoryMock(): Mockery\MockInterface
    {
        $requestMock = $this->makeHttpRequestMock();
        $requestFactoryMock = Mockery::mock(RequestFactoryInterface::class);
        $requestFactoryMock
            ->shouldReceive('createRequest')
            ->times(1)
            ->andReturn($requestMock);

        return $requestFactoryMock;
    }

    /**
     * Make and return HttpRequest mock object.
     *
     * @return MockInterface
     */
    private function makeMicroHttpRequestMock(): Mockery\MockInterface
    {
        $httpRequestMock = Mockery::mock(HttpRequestInterface::class);
        $httpRequestMock
            ->shouldReceive('getUrl')
            ->times(1)
            ->andReturn('');
        $httpRequestMock
            ->shouldReceive('getHeaders')
            ->times(1)
            ->andReturn(['header1' => 1, 'header2' => 2]);

        return $httpRequestMock;
    }
}
