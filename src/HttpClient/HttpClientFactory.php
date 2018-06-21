<?php

namespace Starweb\HttpClient;

use Starweb\Authentication\ClientCredentials;

class HttpClientFactory
{
    public const CLIENT_GUZZLE = 'guzzle';

    public const SUPPORTED_CLIENTS = [
        self::CLIENT_GUZZLE
    ];

    public function create(
        string $type,
        ClientCredentials $credentials,
        string $baseUrl
    ): HttpClientInterface {
        if (!in_array($type, self::SUPPORTED_CLIENTS)) {
            throw new \LogicException(
                sprintf('Http client must be one of "%s"', implode('", "', self::SUPPORTED_CLIENTS))
            );
        }

        if (self::CLIENT_GUZZLE === $type) {
            $client = new GuzzleClient($credentials, $baseUrl);
            return $client;
        }
    }
}
