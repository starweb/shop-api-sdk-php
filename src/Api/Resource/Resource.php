<?php

namespace Starweb\Api\Resource;

use Starweb\HttpClient\Client;

abstract class Resource implements ResourceInterface
{
    /**
     * @var Client
     */
    private $httpClient;

    /**
     * Resource constructor.
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->httpClient;
    }
}
