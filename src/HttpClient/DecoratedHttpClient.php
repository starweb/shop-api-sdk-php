<?php declare(strict_types=1);

namespace Starweb\HttpClient;

use Http\Client\HttpClient;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\RequestFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use Starweb\Api\Model\UploadFileInterface;
use Starweb\HttpClient\Message\DecoratedResponse;

class DecoratedHttpClient implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * HttpClientDecorator constructor.
     *
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient, RequestFactory $requestFactory)
    {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    /**
     * @return RequestFactory
     */
    public function getRequestFactory(): RequestFactory
    {
        return $this->requestFactory;
    }

    /**
     * Convenience method representing the HTTP verb **get**
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function get($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        if (count($parameters) > 0) {
            $path .= '?'.http_build_query($parameters);
        }

        $response = $this->send('GET', $path, $requestHeaders);

        return new DecoratedResponse($response);
    }

    /**
     * Convenience method representing the HTTP verb **head**
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function head($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        if (array_key_exists('ref', $parameters) && is_null($parameters['ref'])) {
            unset($parameters['ref']);
        }

        if (count($parameters) > 0) {
            $path .= '?' . http_build_query($parameters);
        }

        $response = $this->send('HEAD', $path, $requestHeaders);

        return new DecoratedResponse($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function post($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        $requestHeaders['Content-Type'] = 'application/json';

        return $this->postRaw($path, $this->createJsonBody($parameters), $requestHeaders);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function postWwwFormUrlencoded($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        $requestHeaders['Content-Type'] = 'application/x-www-form-urlencoded';

        return $this->postRaw($path, http_build_query($parameters), $requestHeaders);
    }

    public function uploadFile(string $method, string $path, UploadFileInterface $file): DecoratedResponse
    {
        $boundary = '----boundary';
        $builder = $this->getMultipartStreamBuilderForFile($file, $boundary);
        $requestHeaders = ['Content-Type' => 'multipart/form-data; boundary="' . $boundary . '"'];

        $body = $builder->build()->__toString();

        $response = $this->send($method, $path, $requestHeaders, $body);

        return new DecoratedResponse($response);
    }

    private function getMultipartStreamBuilderForFile(UploadFileInterface $file, string $boundary)
    {
        $streamFactory = StreamFactoryDiscovery::find();
        $builder = new MultipartStreamBuilder($streamFactory);
        $builder->setBoundary($boundary);
        $builder->addResource(
            'file',
            $file->getContent(),
            [
                'headers' => ['Content-Type' => $file->getMimeType()],
                'filename' => $file->getFilename()
            ]
        );

        return $builder;
    }

    /**
     * @param $path
     * @param $body
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function postRaw($path, $body, array $requestHeaders = []): DecoratedResponse
    {
        $response = $this->send('POST', $path, $requestHeaders, $body);

        return new DecoratedResponse($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function patch($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        $requestHeaders['Content-Type'] = 'application/json';
        $response = $this->send('PATCH', $path, $requestHeaders, $this->createJsonBody($parameters));

        return new DecoratedResponse($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function put($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        $requestHeaders['Content-Type'] = 'application/json';
        $response = $this->send('PUT', $path, $requestHeaders, $this->createJsonBody($parameters));

        return new DecoratedResponse($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return DecoratedResponse
     *
     * @throws \Http\Client\Exception
     */
    public function delete($path, array $parameters = [], array $requestHeaders = []): DecoratedResponse
    {
        $response = $this->send('DELETE', $path, $requestHeaders, $this->createJsonBody($parameters));

        return new DecoratedResponse($response);
    }

    /**
     * Creates a new PSR-7 request.
     *
     * @param string                               $method
     * @param string|UriInterface                  $uri
     * @param array                                $headers
     * @param resource|string|StreamInterface|null $body
     *
     * @return ResponseInterface|null
     *
     * @throws \Http\Client\Exception
     */
    public function send(string $method, $uri, array $headers = [], $body = null): ResponseInterface
    {
        return $this->sendRequest($this->requestFactory->createRequest(
            $method,
            $uri,
            $headers,
            $body
        ));
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Http\Client\Exception
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function createJsonBody(array $parameters): ?string
    {
        return (count($parameters) === 0) ? null : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }
}
