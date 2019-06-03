<?php declare(strict_types=1);

namespace Starweb;

use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Client;
use Starweb\HttpClient\Builder;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\HttpClient\Plugin\ErrorPlugin;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class Starweb
{
    public const API_VERSION = '2.0.0';

    public const API_VERSION_URI_SUFFIX = 'v2';

    /**
     * @var Client
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
     * @param Client $client
     * @param string              $baseUri
     * @param TokenManager        $tokenManager
     */
    public function __construct(Client $client, string $baseUri, TokenManager $tokenManager)
    {
        $this->client = $client;
        $this->baseUri = $baseUri;
        $this->tokenManager = $tokenManager;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    /**
     * @return TokenManager
     */
    public function getTokenManager(): TokenManager
    {
        return $this->tokenManager;
    }

    /**
     * @param ClientCredentials $clientCredentials
     * @param string $baseUri
     * @param HttpClient|null $httpClient
     * @param MessageFactory|null $messageFactory
     * @param TokenCacheInterface|null $tokenCache
     *
     * @return Starweb
     * @throws \Http\Client\Exception
     */
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
        $client = self::buildHttpClient($httpClient, $messageFactory, $tokenManager, $baseUri);

        return new static($client, $baseUri, $tokenManager);
    }

    /**
     * @param HttpClient $httpClient
     * @param MessageFactory $messageFactory
     * @param TokenManager $tokenManager
     * @param string $baseUri
     *
     * @return Client
     * @throws \Http\Client\Exception
     */
    public static function buildHttpClient(
        HttpClient $httpClient,
        MessageFactory $messageFactory,
        TokenManager $tokenManager,
        string $baseUri
    ): Client {
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
}
