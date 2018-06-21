<?php

namespace Starweb;

use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Starweb\Authentication\ApiAuthentication;
use Starweb\Authentication\ClientCredentials;
use Starweb\Authentication\TokenCacheInterface;
use Starweb\Authentication\TokenFilesystemCache;
use Starweb\Resource\ResourceInterface;

class Starweb
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var TokenCacheInterface
     */
    private $tokenCache;

    public function __construct(
        ClientCredentials $credentials,
        string $baseUri,
        array $plugins = [],
        HttpClient $client = null,
        TokenCacheInterface $tokenCache = null
    ) {
        if (!$client) {
            $client = HttpClientDiscovery::find();
        }

        if (!$tokenCache) {
            $this->tokenCache = $tokenCache = new TokenFilesystemCache();
        }

        $plugins[] = new ErrorPlugin();
        $plugins[] = new AuthenticationPlugin(
            new ApiAuthentication($client, $credentials, $baseUri, $tokenCache)
        );
        $plugins[] = new BaseUriPlugin(
            UriFactoryDiscovery::find()->createUri($baseUri), ['replace' => false]
        );

        $this->client = new PluginClient($client, $plugins);
    }

    public function get(string $resourceKey): ResourceInterface
    {
        if (!in_array($resourceKey, ResourceInterface::AVAILABLE_RESOURCES)) {
            throw new \LogicException(
                sprintf('Resource must be of type: "%s"', implode('", "', ResourceInterface::AVAILABLE_RESOURCES))
            );
        }

        $fqcn = sprintf('Starweb\\Resource\%sResource', $resourceKey);
        return new $fqcn($this->client, $this->tokenCache);
    }
}
