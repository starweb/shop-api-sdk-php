<?php declare(strict_types=1);

namespace Starweb\Api\Authentication;

use Psr\SimpleCache\CacheInterface;

interface TokenCacheInterface extends CacheInterface
{
    public const TOKEN_CACHE_KEY = 'starweb-access-token';

    public function hasToken(): bool;

    public function getToken(): ?TokenInterface;

    public function setToken(TokenInterface $token): void;

    public function clearToken(): void;

    public function isExpired(): bool;
}
