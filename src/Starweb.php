<?php

namespace Starweb;

use Http\Client\HttpClient;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\HttpClient\Client;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;

class Starweb
{
    public const API_VERSION = '2.0.0';

    public const API_VERSION_URI_SUFFIX = 'v2';

    /**
     * @var Client
     */
    private $client;

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
            $tokenCache = new TokenFilesystemCache();
        }

        $this->client = new Client($client, $credentials, $tokenCache , $baseUri, $plugins);
    }

    public function resource(string $resourceKey): ResourceInterface
    {
        switch ($resourceKey) {
            case 'Shop':
                $resource = new ShopResource($this->client);
                break;
            case 'ProductCategory':
                $resource = new ProductCategoryResource($this->client);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined resource instance called: "%s"', $resourceKey));
        }
        return $resource;
    }
}
