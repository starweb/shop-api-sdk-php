<?php

namespace Starweb\HttpClient;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\HistoryPlugin;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\Authentication\Bearer;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Model\ModelInterface;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\Exception\StarwebApiException;
use Starweb\HttpClient\Plugin\History;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Client
{
    /**
     * @var Builder
     */
    private $builder;

    /**
     * @var History
     */
    private $responseHistory;

    /**
     * @var TokenManager
     */
    private $tokenManager;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Creates the Starweb Client as a wrapper around a HttpMethodsClient to offer
     * convenient HTTP verb methods and response conversion
     *
     * @param HttpClient $client
     * @param ClientCredentials $credentials
     * @param TokenCacheInterface $tokenCache
     * @param string $baseUri
     * @param $plugins
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function __construct(
        HttpClient $client,
        ClientCredentials $credentials,
        TokenCacheInterface $tokenCache,
        string $baseUri,
        $plugins
    ) {
        $this->builder          = $builder = new Builder($client);
        $this->responseHistory  = new History();
        $this->baseUri          = $baseUri;
        $this->tokenManager     = new TokenManager($client, $credentials, $tokenCache, $baseUri);

        foreach ($plugins as $plugin) {
            $builder->addPlugin($plugin);
        }

        // add plugins
        $builder->addPlugin(new ErrorPlugin());
        $builder->addPlugin(new HistoryPlugin($this->responseHistory));
        $builder->addPlugin(new RetryAuthenticationPlugin($client, $this->tokenManager));
        $builder->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($baseUri)));
        $builder->addPlugin(new HeaderDefaultsPlugin([
            'User-Agent' => 'starweb-sdk (https://github.com/starweb/starweb-sdk)',
        ]));

        // all parts of the api require authentication, so lets add authentication right away
        $this->authenticate($client);
    }

    /**
     * returns the actual HttpClient from the builder
     *
     * @return HttpMethodsClient
     */
    private function getClient(): HttpMethodsClient
    {
        return $this->builder->getHttpClient();
    }

    /**
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    private function authenticate(): void
    {
        $token = $this->tokenManager->getToken();
        $authentication = new Bearer($token->__toString());
        $this->builder->addPlugin(new AuthenticationPlugin($authentication));
    }

    /**
     * Convenience method representing the HTTP verb **get**
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string|ModelInterface
     *
     * @throws \Http\Client\Exception
     */
    public function get($path, array $parameters = [], array $requestHeaders = [], $fqcn = null)
    {
        if (count($parameters) > 0) {
            $path .= '?'.http_build_query($parameters);
        }

        $response = $this->getClient()->get($path, $requestHeaders);

        return $this->getContent($response, $fqcn);
    }

    /**
     * Convenience method representing the HTTP verb **head**
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return ResponseInterface
     *
     * @throws \Http\Client\Exception
     */
    public function head($path, array $parameters = [], array $requestHeaders = [])
    {
        if (array_key_exists('ref', $parameters) && is_null($parameters['ref'])) {
            unset($parameters['ref']);
        }

        $response = $this->getClient()->head($path.'?'.http_build_query($parameters), $requestHeaders);

        return $response;
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    public function post($path, array $parameters = [], array $requestHeaders = [])
    {
        return $this->postRaw($path, $this->createJsonBody($parameters), $requestHeaders);
    }

    /**
     * @param $path
     * @param $body
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    public function postRaw($path, $body, array $requestHeaders = [])
    {
        $response = $this->getClient()->post($path, $requestHeaders, $body);

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    public function patch($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->getClient()->patch($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    public function put($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->getClient()->put($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    public function delete($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->getClient()->delete($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function createJsonBody(array $parameters)
    {
        return (count($parameters) === 0) ? null : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed|string
     */
    protected function getContent(ResponseInterface $response, string $fqcn = null)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if ($fqcn && class_exists($fqcn)) {
                return $this->getSerializer()->deserialize(json_encode($content['data']), $fqcn, 'json');
            }

            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return string
     */
    protected function getRawContent(ResponseInterface $response)
    {
        return $response->getBody()->__toString();
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array|null
     */
    protected function getPagination(ResponseInterface $response)
    {
        if (!$response->hasHeader('Link')) {
            return;
        }

        $header = self::getHeader($response, 'Link');
        $pagination = [];
        foreach (explode(',', $header) as $link) {
            preg_match('/<(.*)>; rel="(.*)"/i', trim($link, ','), $match);

            if (3 === count($match)) {
                $pagination[$match[2]] = $match[1];
            }
        }

        return $pagination;
    }

    /**
     * Get the value for a single header.
     *
     * @param ResponseInterface $response
     * @param string            $name
     *
     * @return string|null
     */
    protected function getHeader(ResponseInterface $response, $name)
    {
        $headers = $response->getHeader($name);

        return array_shift($headers);
    }

    /**
     * @return Serializer
     */
    protected function getSerializer(): Serializer
    {
        if (!$this->serializer) {
            $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
        }

        return $this->serializer;
    }

    /**
     * @param string $data
     * @param string $fqcn
     * @return ModelInterface
     */
    protected function deserialize(string $data, string $fqcn): ModelInterface
    {
        return $this->getSerializer()->deserialize($data, $fqcn, 'json');
    }
}
