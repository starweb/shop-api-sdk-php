<?php

namespace Starweb\Tests;

use GuzzleHttp\Psr7\Response;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\Resources;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\Builder;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Plugin\ErrorPlugin;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;
use Starweb\Starweb;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StarwebTest extends TestCase
{
    public const DEFAULT_BASE_URI = 'https://demo.starweb.se/api/v2';

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    public function testConstructorWithClientAndTokenCache()
    {
        $starweb = $this->getStarweb();

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    /**
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testConstructorWithoutClientAndTokenCache()
    {
        $starweb = Starweb::create(new ClientCredentials('id', 'secret'), self::DEFAULT_BASE_URI);

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    private function getStarweb(): Starweb
    {
        $client = new Client();
        $response = $this->createMock(Response::class);
        $response->method('getBody')->willReturn(
            $this->getStreamFactory()->createStream('{"access_token": "my-token", "expires_in": "3600"}')
        )
        ;
        $client->addResponse($response);

        $messageFactory = MessageFactoryDiscovery::find();

        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        return Starweb::create(
            new ClientCredentials('id', 'secret'),
            self::DEFAULT_BASE_URI,
            null,
            $messageFactory,
            $cache
        );
    }

    /**
     * @dataProvider resourceProvider
     */
    public function testResources(string $resourceKey): void
    {
        $starweb = $this->getStarweb();
        $resourceFqcn = sprintf('%s\\%sResource', Resources::RESOURCE_NAMESPACE, $resourceKey);

        $reflection = new \ReflectionClass($resourceFqcn);
        $reflectionMethod = $reflection->getMethod('getPathParametersResolver');

        /** @var OptionsResolver $resolver */
        $resourceMock = $this->createMock($resourceFqcn);
        $resolver = $reflectionMethod->invoke($resourceMock);
        $parameters = [];
        foreach ($resolver->getRequiredOptions() as $option) {
            $parameters[$option] = 1;
        }

        $resource = $starweb->resource($resourceKey, $parameters);


        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf($resourceFqcn, $resource);
    }

    public function resourceProvider(): array
    {
        $data = [];
        foreach (Resources::getResources() as $key) {
            $data[] = [$key];
        }

        return $data;
    }

    /**
     * @expectedException \LogicException
     */
    public function testInvalidResource()
    {
        $starweb = $this->getStarweb();
        $starweb->resource('InvalidResource');
    }

    private function getStreamFactory()
    {
        if (!$this->streamFactory) {
            $this->streamFactory = StreamFactoryDiscovery::find();
        }

        return $this->streamFactory;
    }

    private function buildDecoratedHttpClient(
        HttpClient $httpClient,
        MessageFactory $messageFactory
    ): DecoratedHttpClient {
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
}
