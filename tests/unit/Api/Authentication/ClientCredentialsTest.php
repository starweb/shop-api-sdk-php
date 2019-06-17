<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Authentication;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\ClientCredentials;

class ClientCredentialsTest extends TestCase
{
    public function testConstructor(): void
    {
        $credentials = new ClientCredentials('client_id', 'client_secret');

        $this->assertInstanceOf(ClientCredentials::class, $credentials);
    }

    public function testGetId(): void
    {
        $credentials = new ClientCredentials('client_id', 'client_secret');

        $this->assertTrue(is_string($credentials->getId()));
        $this->assertEquals('client_id', ($credentials->getId()));
    }

    public function testGetSecret(): void
    {
        $credentials = new ClientCredentials('client_id', 'client_secret');

        $this->assertTrue(is_string($credentials->getSecret()));
        $this->assertEquals('client_secret', ($credentials->getSecret()));
    }
}
