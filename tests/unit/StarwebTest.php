<?php declare(strict_types=1);

namespace Starweb\Tests;

use GuzzleHttp\Psr7\Response;
use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\Exception\NetworkException;
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
use Starweb\Api\Generated\Client as JaneOpenApiClient;
use Starweb\Exception\InvalidBaseUriException;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\Starweb;

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

    public function testConstructor(): void
    {
        $clientMock = $this->createMock(\Starweb\Api\Client::class);
        $tokenManager = $this->createMock(TokenManager::class);
        $starweb = new Starweb($clientMock, self::DEFAULT_BASE_URI, $tokenManager);

        $this->assertSame(self::DEFAULT_BASE_URI, $starweb->getBaseUri());
        $this->assertSame($clientMock, $starweb->getClient());
        $this->assertSame($tokenManager, $starweb->getTokenManager());
    }

    public function testCreate(): void
    {
        $starweb = $this->getStarweb();

        $this->assertSame(self::DEFAULT_BASE_URI, $starweb->getBaseUri());
    }

    public function testCreateWithNonResolvableBaseUri(): void
    {
        $this->expectException(NetworkException::class);
        Starweb::create(new ClientCredentials('id', 'secret'), 'https://foo.test');
    }

    public function testCreateWithInvalidBaseUri(): void
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(404);
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->expectException(InvalidBaseUriException::class);
        $this->expectExceptionMessage('invalid base uri');
        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    public function testCreateWithInvalidCredentials(): void
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(400);
        $response = $response->withBody(
            $this->getStreamFactory()->createStream('{"error": "invalid_client", "error_description": "message"}')
        );
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->expectException(InvalidCredentialsException::class);
        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    public function testCreateWithServerError(): void
    {
        $clientMock = new Client();
        $response = $this->getResponseFactory()->createResponse(500);
        $response = $response->withBody(
            $this->getStreamFactory()->createStream('{"error": "invalid_client", "error_description": "message"}')
        );
        $clientMock->addResponse($response);
        $tokenCacheMock = $this->createMock(TokenFilesystemCache::class);

        $this->expectException(ServerErrorException::class);
        $this->getStarweb($clientMock, $tokenCacheMock);
    }

    public function testBuildHttpClient(): void
    {
        $clientMock = new Client();
        $messageFactoryMock = $this->createMock(MessageFactory::class);
        $tokenManagerMock = $this->createMock(TokenManager::class);

        $client = Starweb::buildHttpClient(
            $clientMock,
            $messageFactoryMock,
            $tokenManagerMock,
            self::DEFAULT_BASE_URI
        );

        $this->assertInstanceOf(JaneOpenApiClient::class, $client);
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
