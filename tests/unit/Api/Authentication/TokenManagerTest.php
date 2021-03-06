<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Authentication;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use Http\Message\MessageFactory;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\Tests\StarwebTest;

class TokenManagerTest extends TestCase
{

    public function testConstructor(): void
    {
        $manager = $this->getTokenManager();

        $this->assertInstanceOf(TokenManager::class, $manager);
    }

    public function testRequestToken(): void
    {
        $manager = $this->getTokenManager();
        $token = $manager->requestToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    public function testRequestTokenThrowsInvalidCredentialsException(): void
    {
        $stream = $this->createMock(Stream::class);
        $stream->method('__toString')->willReturn(
            '{"error": "invalid_client", "error_description": "invalid credentials"}'
        );

        $response = $this->createMock(Response::class);
        $response->method('getBody')->willReturn($stream);
        $response->method('getStatusCode')->willReturn(400);

        $manager = $this->getTokenManager($response);

        $this->expectException(InvalidCredentialsException::class);
        $manager->requestToken();
    }

    public function testGetToken(): void
    {
        $manager = $this->getTokenManager();
        $token = $manager->getToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    public function testGetTokenWithExistingToken(): void
    {
        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        $manager = $this->getTokenManager(null, $cache);

        $token = $manager->getToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    public function testRefreshToken(): void
    {
        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        $manager = $this->getTokenManager(null, $cache);

        $this->assertNull($manager->refreshToken());
    }

    private function getTokenManager(
        ResponseInterface $response = null,
        TokenCacheInterface $cache = null
    ): TokenManager {
        $client = new Client();

        if (!$response) {
            $stream = $this->createMock(Stream::class);
            $stream->method('__toString')->willReturn('{"access_token": "my-token", "expires_in": 3600}');

            $response = $this->createMock(Response::class);
            $response->method('getBody')->willReturn($stream);
        }
        $client->addResponse($response);

        $messageFactory = $this->createMock(MessageFactory::class);
        $messageFactory->method('createRequest')->willReturn($this->createMock(Request::class));

        if (!$cache) {
            $cache = $this->createMock(TokenFilesystemCache::class);
        }

        return new TokenManager(
            $client,
            $messageFactory,
            new ClientCredentials('id', 'secret'),
            $cache,
            StarwebTest::DEFAULT_BASE_URI
        );
    }
}
