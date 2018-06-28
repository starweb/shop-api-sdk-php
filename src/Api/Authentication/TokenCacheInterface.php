<?php

namespace Starweb\Api\Authentication;

use Psr\SimpleCache\CacheInterface;

interface TokenCacheInterface extends CacheInterface
{
    public const TOKEN_CACHE_KEY = 'starweb-access-token';

    public function hasToken(): bool;
    public function getToken(): ?TokenInterface;
    public function setToken(TokenInterface $token): void;
    public function clear(): void;
    public function isExpired(): bool;
}
