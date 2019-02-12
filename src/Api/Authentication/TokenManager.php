<?php

namespace Starweb\Api\Authentication;

use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Starweb\Exception\InvalidBaseUriException;
use Starweb\Exception\InvalidCredentialsException;

class TokenManager
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var MessageFactory
     */
    private $requestFactory;

    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var TokenCacheInterface
     */
    private $storage;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * TokenManager constructor.
     *
     * @param HttpClient $client
     * @param RequestFactory $requestFactory
     * @param ClientCredentials $credentials
     * @param TokenCacheInterface $storage
     * @param string $baseUri
     */
    public function __construct(
        HttpClient $client,
        RequestFactory $requestFactory,
        ClientCredentials $credentials,
        TokenCacheInterface $storage,
        string $baseUri
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->credentials = $credentials;
        $this->storage = $storage;
        $this->baseUri = $baseUri;
    }

    /**
     * @param HttpClient $client
     *
     * @return TokenInterface
     *
     * @throws InvalidBaseUriException
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function requestToken(): TokenInterface
    {
        $parameters = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->credentials->getId(),
            'client_secret' => $this->credentials->getSecret(),
        ];

        $request = $this->requestFactory->createRequest(
            'POST',
            $this->baseUri.'/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query($parameters)
        );

        $response = $this->client->sendRequest($request);

        $responseData = json_decode($response->getBody()->__toString(), true);

        if (404 === $response->getStatusCode()) {
            throw new InvalidBaseUriException(sprintf('invalid base uri "%s"', $this->baseUri), $request, $response);
        }

        if (500 === $response->getStatusCode()) {
            throw new ServerErrorException('server error', $request, $response);
        }

        if (400 === $response->getStatusCode() && 'invalid_client' === $responseData['error']) {
            throw new InvalidCredentialsException($responseData['error_description'], $request, $response);
        }

        return new AccessToken($responseData['access_token'], $responseData['expires_in']);
    }

    /**
     * @return TokenInterface
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function getToken(): TokenInterface
    {
        if (!$this->storage->hasToken() || $this->storage->isExpired()) {
            $token = $this->requestToken();
            $this->storage->setToken($token);
        } else {
            $token = $this->storage->getToken();
        }

        return $token;
    }

    /**
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function refreshToken(): void
    {
        $token = $this->requestToken();
        $this->storage->setToken($token);
    }
}
