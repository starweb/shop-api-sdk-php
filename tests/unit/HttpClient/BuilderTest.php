<?php

namespace Starweb\Tests\HttpClient;

use Http\Client\Common\Plugin\ErrorPlugin;
use PHPUnit\Framework\TestCase;
use Starweb\HttpClient\Builder;

class BuilderTest extends TestCase
{

    public function testConstructor()
    {
        $builder = new Builder();

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testAddPlugin()
    {
        $builder = new Builder();
        $builder->addPlugin(new ErrorPlugin());

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testRemoveExistingPlugin()
    {
        $builder = new Builder();
        $builder->addPlugin(new ErrorPlugin());
        $builder->removePlugin(ErrorPlugin::class);

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testRemoveNotExistingPlugin()
    {
        $builder = new Builder();
        $builder->removePlugin(ErrorPlugin::class);

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testClearHeaders()
    {
        $builder = new Builder();
        $builder->clearHeaders();

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testAddHeaders()
    {
        $builder = new Builder();
        $builder->addHeaders(['X-Header-Key' => 'value']);

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testAddHeaderValue()
    {
        $builder = new Builder();
        $builder->addHeaderValue('X-Header-Key', 'value');

        $this->assertInstanceOf(Builder::class, $builder);
    }

    public function testAddHeaderValueForExistingHeader()
    {
        $builder = new Builder();
        $builder->addHeaders(['X-Header-Key' => 'value']);
        $builder->addHeaderValue('X-Header-Key', 'updated value');

        $this->assertInstanceOf(Builder::class, $builder);
    }
}
