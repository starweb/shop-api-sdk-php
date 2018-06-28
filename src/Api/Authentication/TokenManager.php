<?php

namespace Starweb\Api\Authentication;

use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\HttpClient\Builder;

class TokenManager
{
    /**
     * @var HttpClient
     */
    private $client;

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
     * @param ClientCredentials $credentials
     * @param TokenCacheInterface $storage
     * @param string $baseUri
     */
    public function __construct(
        HttpClient $client,
        ClientCredentials $credentials,
        TokenCacheInterface $storage,
        string $baseUri
    ) {
        $this->client = $client;
        $this->credentials = $credentials;
        $this->storage = $storage;
        $this->baseUri = $baseUri;
    }

    /**
     * @param HttpClient $client
     *
     * @return TokenInterface
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function requestToken(): TokenInterface
    {
        // we use a separate client created form the builder to fetch the token
        $builder = new Builder($this->client);
        $builder->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($this->baseUri)));
        $client = $builder->getHttpClient();
        $credentials = $this->credentials;

        $requestData = [
            'grant_type=client_credentials',
            'client_id='.$credentials->getId(),
            'client_secret='.$credentials->getSecret(),
        ];
        $body = (implode('&', $requestData));
        $response = $client->post('/token', ['Content-Type' => 'application/x-www-form-urlencoded'], $body);
        $responseData = json_decode($response->getBody(), true);

        if (400 === $response->getStatusCode() && 'invalid_client' === $responseData['error']) {
            throw new InvalidCredentialsException($responseData['error_description']);
        }

        return new AccessToken($responseData['access_token'], $responseData['expires_in']);
    }

    /**
     * @param HttpClient $client
     *
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
