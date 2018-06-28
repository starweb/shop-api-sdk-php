<?php

namespace Starweb\Api\Authentication;

use Symfony\Component\Cache\Simple\FilesystemCache;

class TokenFilesystemCache extends FilesystemCache implements TokenCacheInterface
{
    /**
     * @return TokenInterface
     *
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function getToken(): ?TokenInterface
    {
        $token = $this->get(self::TOKEN_CACHE_KEY);
        return $token ? new AccessToken($token) : null;
    }

    /**
     * @return bool
     *
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function hasToken(): bool
    {
        return $this->get(self::TOKEN_CACHE_KEY) ? true : false;
    }

    /**
     * @param string $token
     *
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function setToken(TokenInterface $token): void
    {
        $this->set(self::TOKEN_CACHE_KEY, $token->__toString(), $token->getTtl());
    }

    /**
     * clear the token
     */
    public function clear(): void
    {
        $this->delete(self::TOKEN_CACHE_KEY);
    }

    /**
     * @return bool
     *
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function isExpired(): bool
    {
        $token = $this->getToken();
        return $token && ($token->getExpiresIn() > new \DateTime());
    }
}
