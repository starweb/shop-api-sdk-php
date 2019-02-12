<?php

namespace Starweb\Tests;

use GuzzleHttp\Psr7\Response;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\ResponseFactory;
use Http\Message\StreamFactory;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\Resources;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\Starweb;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StarwebTest extends TestCase
{
    public const DEFAULT_BASE_URI = 'https://foo.test/v2';

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    private function getStarweb(HttpClient $client = null, TokenCacheInterface $tokenCache = null): Starweb
    {
        if (!$client) {
            $client = new Client();
            $response = $this->createMock(Response::class);
            $response->method('getBody')->willReturn(
                $this->getStreamFactory()->createStream('{"access_token": "my-token", "expires_in": "3600"}')
            );
            $client->addResponse($response);
        }

        $messageFactory = MessageFactoryDiscovery::find();

        if (!$tokenCache) {
            $tokenCache = $this->createMock(TokenFilesystemCache::class);
            $tokenCache->method('hasToken')->willReturn(true);
            $tokenCache->method('isExpired')->willReturn(false);
            $tokenCache->method('getToken')->willReturn(new AccessToken('my-token'));
        }

        return Starweb::create(
            new ClientCredentials('id', 'secret'),
            self::DEFAULT_BASE_URI,
            $client,
            $messageFactory,
            $tokenCache
        );
    }

    public function testConstructor()
    {
        $decoratedHttpClient = $this->createMock(DecoratedHttpClient::class);
        $tokenManager = $this->createMock(TokenManager::class);
        $starweb = new Starweb($decoratedHttpClient, self::DEFAULT_BASE_URI, $tokenManager);

        $this->assertSame(self::DEFAULT_BASE_URI, $starweb->getBaseUri());
        $this->assertSame($decoratedHttpClient, $starweb->getClient());
        $this->assertSame($tokenManager, $starweb->getTokenManager());
    }

    public function testCreate()
    {
        $starweb = $this->getStarweb();

        $this->assertSame(self::DEFAULT_BASE_URI, $starweb->getBaseUri());
    }

    /**
     * @expectedException \Http\Client\Exception\NetworkException
     * @expectedException \Http\Client\Exception\RequestException
     * @expectedException \Http\Client\Exception\HttpException
     */
    public function testCreateWithNonResolvableBaseUri()
    {
        $starweb = Starweb::create(new ClientCredentials('id', 'secret'), 'https://foo.test');

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    /**
     * @expectedException \Starweb\Exception\InvalidBaseUriException
     * @expectedExceptionMessage invalid base uri
     */
    public function testCreateWithInvalidBaseUri()
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(404);
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    /**
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testCreateWithInvalidCredentials()
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(400);
        $response = $response->withBody(
            $this->getStreamFactory()->createStream('{"error": "invalid_client", "error_description": "message"}')
        );
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    /**
     * @expectedException \Http\Client\Common\Exception\ServerErrorException
     */
    public function testCreateWithServerError()
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(500);
        $response = $response->withBody(
            $this->getStreamFactory()->createStream('{"error": "invalid_client", "error_description": "message"}')
        );
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    public function testBuildHttpClient()
    {
        $clientMock = new Client();
        $messageFactoryMock = $this->createMock(MessageFactory::class);
        $tokenManagerMock = $this->createMock(TokenManager::class);

        $decoratedHttpClient = Starweb::buildHttpClient(
            $clientMock,
            $messageFactoryMock,
            $tokenManagerMock,
            self::DEFAULT_BASE_URI
        );

        $this->assertInstanceOf(DecoratedHttpClient::class, $decoratedHttpClient);
    }

    /**
     * @dataProvider resourceProvider
     */
    public function testResources(string $resourceKey): void
    {
        $starweb = $this->getStarweb();
        $resourceFqcn = sprintf('%s\\%sResource', Resources::RESOURCE_NAMESPACE, $resourceKey);

        $reflection = new \ReflectionClass($resourceFqcn);
        $reflectionMethod = $reflection->getMethod('getPathParametersResolver');

        /** @var OptionsResolver $resolver */
        $resourceMock = $this->createMock($resourceFqcn);
        $resolver = $reflectionMethod->invoke($resourceMock);
        $parameters = [];
        foreach ($resolver->getRequiredOptions() as $option) {
            $parameters[$option] = 1;
        }

        $resource = $starweb->resource($resourceKey, $parameters);


        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf($resourceFqcn, $resource);
    }

    public function resourceProvider(): array
    {
        $data = [];
        foreach (Resources::getResources() as $key) {
            $data[] = [$key];
        }

        return $data;
    }

    /**
     * @expectedException \LogicException
     */
    public function testInvalidResource()
    {
        $starweb = $this->getStarweb();
        $starweb->resource('InvalidResource');
    }

    private function getStreamFactory(): StreamFactory
    {
        if (!$this->streamFactory) {
            $this->streamFactory = StreamFactoryDiscovery::find();
        }

        return $this->streamFactory;
    }

    private function getResponseFactory(): ResponseFactory
    {
        if (!$this->messageFactory) {
            $this->messageFactory = MessageFactoryDiscovery::find();
        }

        return $this->messageFactory;
    }
}
