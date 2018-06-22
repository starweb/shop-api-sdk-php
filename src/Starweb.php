<?php

namespace Starweb;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\HistoryPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\Authentication\Bearer;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ApiAuthentication;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\Builder;
use Starweb\HttpClient\Plugin\History;

class Starweb
{
    public const API_VERSION = '2.0.0';

    public const API_VERSION_URI_SUFFIX = 'v2';

    /**
     * @var Builder
     */
    private $httpClientBuilder;

    /**
     * @var History
     */
    private $responseHistory;

    /**
     * @var TokenCacheInterface
     */
    private $tokenCache;

    /**
     * @var ClientCredentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $baseUri;

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
        $this->httpClientBuilder = $builder = new Builder($client);
        $this->responseHistory = $history = new History();
        $this->tokenCache = $tokenCache ?? new TokenFilesystemCache();
        $this->baseUri = $baseUri;
        $this->credentials = $credentials;

        foreach ($plugins as $plugin) {
            $builder->addPlugin($plugin);
        }

        $builder->addPlugin(new ErrorPlugin());
        $builder->addPlugin(new HistoryPlugin($this->responseHistory));
        $builder->addPlugin(new RedirectPlugin());
        $builder->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($baseUri)));
        $plugins[] = new AuthenticationPlugin(
            new ApiAuthentication($client, $credentials, $baseUri, $this->tokenCache)
        );
        $builder->addPlugin(new HeaderDefaultsPlugin([
            'User-Agent' => 'starweb-sdk (https://github.com/starweb/starweb-sdk)',
        ]));

        // all parts of the api require authentication
        $this->authenticate($client);
    }

    public function authenticate(HttpClient $client)
    {
        if (!$this->tokenCache->hasToken()) {
            $token = $this->requestToken($client);
            $this->tokenCache->setToken($token);
        } else {
            $token = $this->tokenCache->getToken();
        }

        $this->httpClientBuilder->removePlugin(AuthenticationPlugin::class);
        $authentication = new Bearer($token->__toString());
        $this->httpClientBuilder->addPlugin(new AuthenticationPlugin($authentication));
    }

    protected function requestToken(HttpClient $client): TokenInterface
    {
        $builder = new Builder($client);
        $builder->addPlugin(new BaseUriPlugin(UriFactoryDiscovery::find()->createUri($this->baseUri)));
        $client = $builder->getHttpClient();
        $credentials = $this->credentials;

        $data = [
            'grant_type=client_credentials',
            'client_id='.$credentials->getId(),
            'client_secret='.$credentials->getSecret(),
        ];
        $body = (implode('&', $data));
        $response = $client->post('/token', ['Content-Type' => 'application/x-www-form-urlencoded'], $body);

        $data = json_decode($response->getBody(), true);

        return new AccessToken($data['access_token'], $data['expires_in']);
    }

    public function resource(string $resourceKey): ResourceInterface
    {
        switch ($resourceKey) {
            case 'shop':
                $resource = new ShopResource($this);
                break;
            case 'product-categories':
            case 'ProductCategories':
                $resource = new ProductCategoryResource($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined resource instance called: "%s"', $resourceKey));
        }
        return $resource;
    }

    public function getHttpClient(): HttpMethodsClient
    {
        return $this->httpClientBuilder->getHttpClient();
    }
}
