<?php

namespace Starweb\Api\Endpoint;

class Endpoint implements EndpointInterface
{
    /**
     * @var string
     */
    private $uri;

    /**
     * Endpoint constructor.
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
}
