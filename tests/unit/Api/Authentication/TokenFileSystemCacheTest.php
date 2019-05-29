<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Authentication;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenInterface;
use Symfony\Component\Cache\Simple\FilesystemCache;

class TokenFileSystemCacheTest extends TestCase
{
    /**
     * @var TokenCacheInterface
     */
    private $cache;

    protected function setUp()
    {
        $this->cache = new TokenFilesystemCache();
    }

    public function testConstructor()
    {
        $tokenCache = new TokenFilesystemCache();

        $this->assertInstanceOf(TokenCacheInterface::class, $tokenCache);
        $this->assertInstanceOf(FilesystemCache::class, $tokenCache);
    }

    public function testSetToken()
    {
        $this->assertNull($this->cache->setToken(new AccessToken('my-token')));
    }

    public function testHasToken()
    {
        $this->cache->setToken(new AccessToken('my-token'));
        $hasToken = $this->cache->hasToken();

        $this->assertTrue(is_bool($hasToken));
        $this->assertTrue($hasToken);
    }

    public function testGetToken()
    {
        $this->cache->setToken(new AccessToken('my-token'));

        $this->assertInstanceOf(TokenInterface::class, $this->cache->getToken());
        $this->assertEquals('my-token', $this->cache->getToken()->__toString());
    }

    public function testClearToken()
    {
        $this->cache->setToken(new AccessToken('my-token'));
        $this->cache->clearToken();

        $this->assertFalse($this->cache->hasToken());
    }

    public function testIsExpired()
    {
        $this->cache->setToken(new AccessToken('my-token'));

        $this->assertTrue(is_bool($this->cache->isExpired()));
        $this->assertFalse($this->cache->isExpired());
    }

    public function testIsExpiredWithOneSecondTtl()
    {
        $token = new AccessToken('my-token', 0);
        $this->cache->setToken($token);

        $this->assertTrue(is_bool($this->cache->isExpired()));
        $this->assertTrue($this->cache->isExpired());
    }

    protected function tearDown()
    {
        $this->cache->clearToken();
    }
}
