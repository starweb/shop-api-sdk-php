<?php declare(strict_types=1);

namespace Starweb\Api\Authentication;

use Symfony\Component\Cache\Simple\FilesystemCache;

class TokenFilesystemCache extends FilesystemCache implements TokenCacheInterface
{
    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function getToken(): ?TokenInterface
    {
        return $this->has(self::TOKEN_CACHE_KEY) ? unserialize($this->get(self::TOKEN_CACHE_KEY)) : null;
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function hasToken(): bool
    {
        return $this->has(self::TOKEN_CACHE_KEY);
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function setToken(TokenInterface $token): void
    {
        $this->set(self::TOKEN_CACHE_KEY, serialize($token), $token->getTtl());
    }

    public function clearToken(): void
    {
        $this->delete(self::TOKEN_CACHE_KEY);
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function isExpired(): bool
    {
        return !$this->hasToken() || ($this->getToken()->getExpiresIn() < new \DateTime());
    }
}
