<?php

namespace Starweb\Api\Authentication;

final class AccessToken implements TokenInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var int
     */
    private $ttl;

    /**
     * @var \DateTime
     */
    private $expiresIn;

    /**
     * AccessToken constructor.
     * @param string $token
     */
    public function __construct(string $token, int $expiresIn = 3600)
    {
        $this->token = $token;
        $this->ttl = $expiresIn;
        $this->expiresIn = new \DateTime(sprintf('+%dseconds', $expiresIn));
    }

    public function __toString(): string
    {
        return $this->token ?: '';
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function getExpiresIn(): \DateTime
    {
        return $this->expiresIn;
    }
}
