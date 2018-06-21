<?php

namespace Starweb\Authentication;

use Psr\SimpleCache\CacheInterface;

interface TokenCacheInterface extends CacheInterface
{
    public const TOKEN_CACHE_KEY = 'starweb-access-token';

    public function getToken(): ?TokenInterface;
    public function setToken(TokenInterface $token): void;
}
