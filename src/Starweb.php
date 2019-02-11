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
use Starweb\Exception\InvalidCredentialsException;
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

    /**
     * Starweb constructor.
     *
     * @param ClientCredentials $credentials
     * @param string $baseUri
     * @param DecoratedHttpClient|null $decoratedHttpClient
     * @param MessageFactory|null $messageFactory
     * @param TokenCacheInterface|null $tokenCache
     *
     * @throws \Http\Client\Exception
     */
    public function __construct(
        ClientCredentials $credentials,
        string $baseUri,
        DecoratedHttpClient $decoratedHttpClient = null,
        MessageFactory $messageFactory = null,
        TokenCacheInterface $tokenCache = null
    ) {
        if (!$decoratedHttpClient) {
            $httpClient = HttpClientDiscovery::find();

        }
        $httpClient = $decoratedHttpClient->getHttpClient();
        $this->client = $decoratedHttpClient;

        if (!$messageFactory) {
            $messageFactory = MessageFactoryDiscovery::find();
        }

        if (!$tokenCache) {
            $tokenCache = new TokenFilesystemCache();
        }

        $this->baseUri      = $baseUri;
        $this->tokenManager = new TokenManager($httpClient, $messageFactory, $credentials, $tokenCache, $baseUri);
    }

    /**
     * @param HttpClient $httpClient
     * @param MessageFactory $messageFactory
     *
     * @return DecoratedHttpClient
     *
     * @throws InvalidCredentialsException
     * @throws \Http\Client\Exception
     */
    private function buildHttpClient(HttpClient $httpClient, MessageFactory $messageFactory): DecoratedHttpClient
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
