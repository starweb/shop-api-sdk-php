<?php

namespace Starweb;

use Starweb\Authentication\ClientCredentials;
use Starweb\HttpClient\HttpClientInterface;
use Starweb\Resource\ResourceInterface;

class Starweb
{
    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * Starweb constructor.
     *
     * @param HttpClientInterface $httpClient
     */
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function get(string $resourceKey): ResourceInterface
    {
        if (!in_array($resourceKey, ResourceInterface::AVAILABLE_RESOURCES)) {
            throw new \LogicException(
                sprintf('Resource must be of type: "%s"', implode('", "', ResourceInterface::AVAILABLE_RESOURCES))
            );
        }

        $fqcn = sprintf('Starweb\\Resource\%sResource', $resourceKey);
        return new $fqcn($this->httpClient);
    }
}
