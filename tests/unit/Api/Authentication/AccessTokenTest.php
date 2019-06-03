<?php declare(strict_types=1);

namespace Starweb\Tests\Api;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;

class AccessTokenTest extends TestCase
{
    public function testConstructor(): void
    {
        $token = new AccessToken('my-token');
        $this->assertInstanceOf(AccessToken::class, $token);
    }

    public function testToString(): void
    {
        $token = new AccessToken('my-token');

        $this->assertTrue(is_string((string) $token));
        $this->assertEquals('my-token', (string) $token);
    }

    public function testGetTtl(): void
    {
        $token = new AccessToken('my-token');

        $this->assertTrue(is_int($token->getTtl()));
        $this->assertEquals(3600, $token->getTtl());
    }

    public function testGetCustomTtl(): void
    {
        $token = new AccessToken('my-token', 7200);

        $this->assertTrue(is_int($token->getTtl()));
        $this->assertEquals(7200, $token->getTtl());
    }

    public function testGetExpiresIn(): void
    {
        // the actual expiresIn datetime will be sooner
        $token = new AccessToken('my-token');
        $expiresIn = new \DateTime(sprintf('+%dseconds', 3600));

        $this->assertInstanceOf(\DateTime::class, $token->getExpiresIn());
        $this->assertLessThan($expiresIn, $token->getExpiresIn());
    }
}
