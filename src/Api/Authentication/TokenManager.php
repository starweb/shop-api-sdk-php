<?php declare(strict_types=1);

namespace Starweb\Api\Authentication;

use Http\Client\Common\Exception\ClientErrorException;
use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Starweb\Exception\InvalidBaseUriException;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\HttpClient\Plugin\ErrorPlugin;

class TokenManager
{
    private const MAX_RETRIES = 25;

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

        $success = false;
        $tries = 1;

        while (!$success) {
            $response = $this->client->sendRequest($request);

            $responseJson = $response->getBody()->__toString();
            $responseData = json_decode($responseJson, true);

            if (404 === $response->getStatusCode()) {
                throw new InvalidBaseUriException(sprintf('invalid base uri "%s"', $this->baseUri), $request, $response);
            }

            if (500 === $response->getStatusCode()) {
                throw new ServerErrorException('server error', $request, $response);
            }

            if (!is_array($responseData)) {
                $errorMessage = 'Malformed response. [responseJson]: ' . $responseJson;
                throw new ClientErrorException($errorMessage, $request, $response);
            }

            if (400 === $response->getStatusCode() && $responseData['error'] === 'invalid_client') {
                throw new InvalidCredentialsException($responseData['error_description'], $request, $response);
            }

            if (!isset($responseData['access_token'])) {
                if (isset($responseData['error']) && $responseData['error'] === 'Too Many Requests') {
                    if ($tries > self::MAX_RETRIES) {
                        $errorMessage = sprintf("'Too many requests' reached %d re-tries", self::MAX_RETRIES);
                        throw new ClientErrorException($errorMessage, $request, $response);
                    }
                    sleep(ErrorPlugin::SECONDS_TO_SLEEP_ON_MAX_REQUEST_PER_MINUTE_ERROR);
                    $tries++;
                    continue;
                }

                $errorMessage = 'Malformed response. [responseJson]: ' . $responseJson;
                throw new ClientErrorException($errorMessage, $request, $response);
            }

            $success = true;
        }

        return new AccessToken($responseData['access_token'], $responseData['expires_in']);
    }

    /**
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
