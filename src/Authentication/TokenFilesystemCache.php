<?php

namespace Starweb\Authentication;

use Symfony\Component\Cache\Simple\FilesystemCache;

class TokenFilesystemCache extends FilesystemCache implements TokenCacheInterface
{
    /**
     * @return TokenInterface
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function getToken(): ?TokenInterface
    {
        $token = $this->get(self::TOKEN_CACHE_KEY);
        return $token ? new AccessToken($token) : null;
    }

    /**
     * @param string $token
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function setToken(TokenInterface $token): void
    {
        $this->set(self::TOKEN_CACHE_KEY, $token->getToken());
    }
}
