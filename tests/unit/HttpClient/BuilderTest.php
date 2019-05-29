<?php declare(strict_types=1);

namespace Starweb\Tests\HttpClient;

use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\HttpClient\Builder;
use Starweb\Api\Client\Client as JaneOpenApiClient;

class BuilderTest extends TestCase
{

    public function testConstructor()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testSetHttpClient()
    {
        $builder = new Builder();
        $builder->setHttpClient(new Client());
        $client = $builder->build();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(JaneOpenApiClient::class, $client);
    }

    public function testSetMessageFactory()
    {
        $builder = new Builder();
        $builder->setMessageFactory(MessageFactoryDiscovery::find());
        $client = $builder->build();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(JaneOpenApiClient::class, $client);
    }

    public function testAddPlugin()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addPlugin(new ErrorPlugin()));
    }

    public function testRemoveExistingPlugin()
    {
        $builder = new Builder();
        $builder->addPlugin(new ErrorPlugin());

        $this->assertInstanceOf(Builder::class, $builder->removePlugin(ErrorPlugin::class));
    }

    public function testRemoveNotExistingPlugin()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder->removePlugin(ErrorPlugin::class));
    }

    public function testClearHeaders()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->clearHeaders());
    }

    public function testAddHeaders()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaders(['X-Header-Key' => 'value']));
    }

    public function testAddHeaderValue()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaderValue('X-Header-Key', 'value'));
    }

    public function testAddHeaderValueForExistingHeader()
    {
        $builder = new Builder();
        $builder->addHeaders(['X-Header-Key' => 'value']);

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addHeaderValue('X-Header-Key', 'updated value'));
    }

    public function testAuthentication()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
        $this->assertInstanceOf(Builder::class, $builder->addAuthentication(new AccessToken('my-token')));
    }
}
