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
use Starweb\Api\Resource\CurrencyResource;
use Starweb\Api\Resource\CustomerAddressResource;
use Starweb\Api\Resource\CustomerExternalServiceResource;
use Starweb\Api\Resource\CustomerResource;
use Starweb\Api\Resource\CustomerTagResource;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Resource\OrderAddressResource;
use Starweb\Api\Resource\OrderCommentResource;
use Starweb\Api\Resource\OrderExternalServiceResource;
use Starweb\Api\Resource\OrderItemResource;
use Starweb\Api\Resource\OrderResource;
use Starweb\Api\Resource\OrderStatusResource;
use Starweb\Api\Resource\PaymentMethodResource;
use Starweb\Api\Resource\PricelistResource;
use Starweb\Api\Resource\ProductAttributeResource;
use Starweb\Api\Resource\ProductCategoryLinkResource;
use Starweb\Api\Resource\ProductLanguageResource;
use Starweb\Api\Resource\ProductManufacturerResource;
use Starweb\Api\Resource\ProductMediaFileLinkResource;
use Starweb\Api\Resource\ProductMetaDataResource;
use Starweb\Api\Resource\ProductMetaDataTypeResource;
use Starweb\Api\Resource\ProductResource;
use Starweb\Api\Resource\ProductStockStatusResource;
use Starweb\Api\Resource\ProductUnitResource;
use Starweb\Api\Resource\ProductVariantAttributeResource;
use Starweb\Api\Resource\ProductVariantAttributeValueResource;
use Starweb\Api\Resource\ProductVariantPricelistPriceResource;
use Starweb\Api\Resource\ProductVariantResource;
use Starweb\Api\Resource\ProductVatRateResource;
use Starweb\Api\Resource\Resources;
use Starweb\Api\Resource\ShippingMethodResource;
use Starweb\Api\Resource\ShippingTrackingTypeResource;
use Starweb\Api\Resource\TagResource;
use Starweb\Exception\InvalidCredentialsException;
use Starweb\HttpClient\Builder;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Plugin\ErrorPlugin;
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
     * @param MessageFactory|null $messageFactory
     * @param TokenCacheInterface|null $tokenCache
     *
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
