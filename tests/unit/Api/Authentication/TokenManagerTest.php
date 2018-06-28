<?php

namespace Starweb\Tests\Api\Authentication;

use Http\Client\HttpClient;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Api\Authentication\TokenManager;

class TokenManagerTest extends TestCase
{

    public function testConstructor()
    {
        $manager = new TokenManager(
            $this->createMock(HttpClient::class),
            new ClientCredentials('id', 'secret'),
            $this->createMock(TokenFilesystemCache::class),
            'baseUri'
        );

        $this->assertInstanceOf(TokenManager::class, $manager);
    }

    public function testRequestToken()
    {
        $manager = $this->getTokenManager();
        $token = $manager->requestToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    /**
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testRequestTokenThrowsInvalidCredentialsException()
    {
        $client = new Client();
        $response = $this->createMock(ResponseInterface::class);
        $client->addResponse($response);
        $response->method('getStatusCode')->willReturn(400);
        $response->method('getBody')->willReturn(
            '{
                "error": "invalid_client",
                "error_description": "The client credentials are invalid"
            }');
        $cache = $this->createMock(TokenFilesystemCache::class);

        $manager = new TokenManager(
            $client,
            new ClientCredentials('id', 'secret'),
            $cache,
            'http://demo.startweb.se/api/v2'
        );

        $token = $manager->requestToken();
    }

    public function testGetToken()
    {
        $manager = $this->getTokenManager();
        $token = $manager->getToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    public function testGetTokenWithExistingToken()
    {
        $client = new Client();
        $response = $this->createMock(ResponseInterface::class);
        $client->addResponse($response);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');
        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        $manager = new TokenManager(
            $client,
            new ClientCredentials('id', 'secret'),
            $cache,
            'http://demo.startweb.se/api/v2'
        );

        $token = $manager->getToken();

        $this->assertInstanceOf(TokenInterface::class, $token);
    }

    public function testRefreshToken()
    {
        $client = new Client();
        $response = $this->createMock(ResponseInterface::class);
        $client->addResponse($response);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');
        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        $manager = new TokenManager(
            $client,
            new ClientCredentials('id', 'secret'),
            $cache,
            'http://demo.startweb.se/api/v2'
        );

        $manager->refreshToken();
        $this->assertInstanceOf(TokenInterface::class, $manager->getToken());
    }

    private function getTokenManager()
    {
        $client = new Client();
        $response = $this->createMock(ResponseInterface::class);
        $client->addResponse($response);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');
        $cache = $this->createMock(TokenFilesystemCache::class);

        return new TokenManager(
            $client,
            new ClientCredentials('id', 'secret'),
            $cache,
            'http://demo.startweb.se/api/v2'
        );
    }
}
