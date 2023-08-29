<?php declare(strict_types=1);

namespace Starweb\Tests\HttpClient;

use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\TokenManager;
use Starweb\HttpClient\Builder;
use Starweb\Api\Generated\Client as JaneOpenApiClient;

class BuilderTest extends TestCase
{

    public function testConstructor(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testSetHttpClient(): void
    {
        $builder = new Builder();
        $builder->setHttpClient(new Client());
        $client = $builder->build();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(JaneOpenApiClient::class, $client);
    }

    public function testSetMessageFactory(): void
    {
        $builder = new Builder();
        $builder->setMessageFactory(MessageFactoryDiscovery::find());
        $client = $builder->build();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(JaneOpenApiClient::class, $client);
    }

    public function testAddPlugin(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addPlugin(new ErrorPlugin()));
    }

    public function testRemoveExistingPlugin(): void
    {
        $builder = new Builder();
        $builder->addPlugin(new ErrorPlugin());

        $this->assertInstanceOf(Builder::class, $builder->removePlugin(ErrorPlugin::class));
    }

    public function testRemoveNotExistingPlugin(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder->removePlugin(ErrorPlugin::class));
    }

    public function testClearHeaders(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->clearHeaders());
    }

    public function testAddHeaders(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaders(['X-Header-Key' => 'value']));
    }

    public function testAddHeaderValue(): void
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaderValue('X-Header-Key', 'value'));
    }

    public function testAddHeaderValueForExistingHeader(): void
    {
        $builder = new Builder();
        $builder->addHeaders(['X-Header-Key' => 'value']);

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaderValue('X-Header-Key', 'updated value'));
    }

    public function testAuthentication(): void
    {
        $tokenManagerMock = $this->createMock(TokenManager::class);
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addAuthentication($tokenManagerMock));
    }
}
