<?php

namespace Starweb\Resource;

use Starweb\HttpClient\GuzzleClient;
use Starweb\HttpClient\HttpClientInterface;

abstract class Resource implements ResourceInterface
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * Resource constructor.
     * @param HttpClientInterface $client
     */
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
}
