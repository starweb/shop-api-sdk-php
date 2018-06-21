<?php

namespace Starweb\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use Starweb\Authentication\AccessToken;
use Starweb\Authentication\ClientCredentials;
use Starweb\Authentication\TokenCacheInterface;
use Starweb\Authentication\TokenFilesystemCache;
use Starweb\Authentication\TokenInterface;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\Exception\StarwebApiException;
use Starweb\Operation\OperationInterface;

class GuzzleClient implements HttpClientInterface
{
    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var TokenCacheInterface
     */
    private $tokenCache;

    /**
     * @var Client
     */
    private $client;

    /**
     * GuzzleClient constructor.
     * @param ClientCredentials $credentials
     * @param string $baseUri
     * @param TokenCacheInterface|null $tokenCache
     */
    public function __construct(
        ClientCredentials $credentials,
        string $baseUri,
        TokenCacheInterface $tokenCache = null
    ) {
        $this->baseUri = $baseUri;
        $this->credentials = $credentials;
        if (null === $tokenCache) {
            $this->tokenCache = new TokenFilesystemCache();
        }
        $this->client = new Client(['base_uri' => $baseUri]);
    }

    /**
     * @return TokenInterface
     * @throws InvalidCredentialsException
     */
    private function getAccessToken(): TokenInterface
    {
        return $this->tokenCache->getToken() ?? $this->authenticate();
    }

    /**
     * @return TokenInterface
     * @throws InvalidCredentialsException
     */
    private function authenticate(): TokenInterface
    {
        $response = $this->client->post(self::REQUEST_TOKEN_ENDPOINT, [
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->credentials->getId(),
                'client_secret' => $this->credentials->getSecret(),
            ],
        ]);

        if (200 === $response->getStatusCode()) {
            throw new InvalidCredentialsException('invalid credentials');
        }

        $content = json_decode($response->getBody(), true);

        $token = new AccessToken($content['access_token']);
        $this->tokenCache->setToken($token);

        return $token;
    }

    /**
     * @param string $baseUri
     */
    public function setBaseUri(string $baseUri): void
    {
        $this->baseUri = $baseUri;
    }

    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    /**
     * @param OperationInterface $operation
     * @return ResponseInterface
     * @throws InvalidCredentialsException
     * @throws StarwebApiException
     */
    public function executeEndpointOperation(OperationInterface $operation): ResponseInterface
    {
        $request = new Request(
            $operation->getMethod(),
            $operation->getUri(),
            $this->getHeaders($operation->getHeaders())
        );

        try {
            return $this->client->send($request);

        } catch (GuzzleException $exception) {
            throw new StarwebApiException($exception->getMessage());
        }
    }

    /**
     * @param array $headers
     * @return array
     * @throws InvalidCredentialsException
     */
    private function getHeaders(array $headers = [])
    {
        return array_merge($this->getDefaultHeaders(), $headers);
    }

    /**
     * @return array
     * @throws InvalidCredentialsException
     */
    private function getDefaultHeaders()
    {
        return ['Authorization' => sprintf('Bearer %s', $this->getAccessToken()->getToken())];
    }
}
