<?php

namespace Starweb\Authentication;

use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;
use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
use Starweb\Exception\InvalidCredentialsException;

class ApiAuthentication implements Authentication
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
     * @var string
     */
    private $baseUri;

    /**
     * @var TokenCacheInterface
     */
    private $tokenCache;

    /**
     * ApiAuthentication constructor.
     * @param HttpClient $client
     */
    public function __construct(
        HttpClient $client,
        ClientCredentials $credentials,
        string $baseUri,
        TokenCacheInterface $tokenCache
    )
    {
        $this->client       = $client;
        $this->credentials  = $credentials;
        $this->baseUri      = $baseUri;
        $this->tokenCache   = $tokenCache;
    }

    public function authenticate(RequestInterface $request): RequestInterface
    {
        $request = $request->withHeader('Authorization', sprintf('Bearer %s', $this->getAccessToken()));

        return $request;
    }

    /**
     * @return TokenInterface
     * @throws \Exception
     */
    private function getAccessToken(): TokenInterface
    {
        if ($this->tokenCache->hasToken()) {
            return $this->tokenCache->getToken();
        }

        $token = $this->requestAccessToken();
        $this->tokenCache->setToken($token);

        return $token;
    }

    private function requestAccessToken(): TokenInterface
    {
        $request = new Request('POST', $this->baseUri . 'token', [], [
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->credentials->getId(),
                'client_secret' => $this->credentials->getSecret(),
            ],
        ]);

        try {
            $response = $this->client->sendRequest($request);

            if (405 === $response->getStatusCode()) {
            }


        } catch (\Http\Client\Exception $exception) {
            throw new InvalidCredentialsException('invalid credentials');
        }

        $data = json_decode($response->getBody(), true);

        return new AccessToken($data['access_token'], $data['expires_in']);
    }
}
