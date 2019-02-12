<?php

namespace Starweb;

use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Resource\Resources;
use Starweb\HttpClient\Builder;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Plugin\ErrorPlugin;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class Starweb
{
    public const API_VERSION = '2.0.0';

    public const API_VERSION_URI_SUFFIX = 'v2';

    /**
     * @var DecoratedHttpClient
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

    public function __construct(DecoratedHttpClient $decoratedHttpClient, string $baseUri, TokenManager $tokenManager)
    {
        $this->client = $decoratedHttpClient;
        $this->baseUri = $baseUri;
        $this->tokenManager = $tokenManager;
    }

    public static function create(
        ClientCredentials $clientCredentials,
        string $baseUri,
        HttpClient $httpClient = null,
        MessageFactory $messageFactory = null,
        TokenCacheInterface $tokenCache = null
    ): self {
        if (!$httpClient) {
            $httpClient = HttpClientDiscovery::find();
        }

        if (!$messageFactory) {
            $messageFactory = MessageFactoryDiscovery::find();
        }

        if (!$tokenCache) {
            $tokenCache = new TokenFilesystemCache();
        }

        $tokenManager = new TokenManager($httpClient, $messageFactory, $clientCredentials, $tokenCache, $baseUri);
        $decoratedHttpClient = self::buildHttpClient($httpClient, $messageFactory, $tokenManager, $baseUri);

        return new static($decoratedHttpClient, $baseUri, $tokenManager);
    }

    public static function buildHttpClient(
        HttpClient $httpClient,
        MessageFactory $messageFactory,
        TokenManager $tokenManager,
        string $baseUri
    ): DecoratedHttpClient {
        $builder = new Builder();
        $builder->setHttpClient($httpClient)
                ->setMessageFactory($messageFactory)
                ->addPlugin(new ErrorPlugin())
                ->addPlugin(new RetryAuthenticationPlugin($tokenManager))
                ->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($baseUri)))
                ->addPlugin(new HeaderDefaultsPlugin([
                    'User-Agent' => 'starweb-sdk (https://github.com/starweb/starweb-sdk)',
                ]))
                ->addAuthentication($tokenManager->getToken())
        ;

        return $builder->build();
    }

    /**
     * retrieves a resource by name. Each resource gets injected the EnhancedHttpClient enabling
     * it to query the api in a convenient way.
     *
     * If the resource is not supported a LogicException is thrown. Available resource keys are defined in
     * @see self::RESOURCE_KEYS
     *
     * The $pathParameters argument is needed for nested resources, e.g. if you want to use a resource CustomerTag
     * you need to pass in the parameter as ['customerId' => 123].
     *
     * @param string $resourceKey
     * @param array $pathParameters
     *
     * @return ResourceInterface
     *
     * @throws \LogicException
     * @throws \ReflectionException
     */
    public function resource(string $resourceKey, array $pathParameters = []): ResourceInterface
    {
        if (!in_array($resourceKey, Resources::getResources(), true)) {
            throw new \LogicException(sprintf('Undefined resource instance called: "%s"', $resourceKey));
        }

        $resourceFqcn = sprintf('%s\\%sResource', Resources::RESOURCE_NAMESPACE, $resourceKey);
        $resource = new $resourceFqcn($this->client, $pathParameters);

        return $resource;
    }
}
