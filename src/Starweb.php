<?php

namespace Starweb;

use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\HttpClient\Builder;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class Starweb
{
    public const API_VERSION = '2.0.0';

    public const API_VERSION_URI_SUFFIX = 'v2';

    /**
     * @var EnhancedHttpClient
     */
    private $client;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var TokenManager
     */
    private $tokenManager;

    /**
     * Starweb constructor.
     *
     * @param ClientCredentials $credentials
     * @param string $baseUri
     * @param HttpClient|null $httpClient
     * @param TokenCacheInterface|null $tokenCache
     *
     * @throws Exception\InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    public function __construct(
        ClientCredentials $credentials,
        string $baseUri,
        HttpClient $httpClient = null,
        MessageFactory $messageFactory = null,
        TokenCacheInterface $tokenCache = null
    ) {
        if (!$httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }

        if (!$messageFactory) {
            $messageFactory = MessageFactoryDiscovery::find();
        }

        if (!$tokenCache) {
            $tokenCache = new TokenFilesystemCache();
        }


        $this->baseUri      = $baseUri;
        $this->tokenManager = new TokenManager($httpClient, $messageFactory, $credentials, $tokenCache, $baseUri);
        $this->client       = $this->buildHttpClient($httpClient, $messageFactory);
    }

    /**
     * @param HttpClient $httpClient
     * @param MessageFactory $messageFactory
     *
     * @return EnhancedHttpClient
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    private function buildHttpClient(HttpClient $httpClient, MessageFactory $messageFactory): EnhancedHttpClient
    {
        $builder = new Builder();
        $builder->setHttpClient($httpClient)
                ->setMessageFactory($messageFactory)
                ->addPlugin(new ErrorPlugin())
                ->addPlugin(new RetryAuthenticationPlugin($this->tokenManager))
                ->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($this->baseUri)))
                ->addPlugin(new HeaderDefaultsPlugin([
                    'User-Agent' => 'starweb-sdk (https://github.com/starweb/starweb-sdk)',
                ]))
                ->addAuthentication($this->tokenManager->getToken());

        return $builder->build();
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
            case 'MediaFile':
                $resource = new MediaFileResource($this->client);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined resource instance called: "%s"', $resourceKey));
        }
        return $resource;
    }
}
