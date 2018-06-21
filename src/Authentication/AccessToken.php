<?php

namespace Starweb\Authentication;

final class AccessToken implements TokenInterface
{
    /**
     * @var string
     */
    private $token;

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
        $this->expiresIn = new \DateTime(sprintf('+%dseconds', $expiresIn));
    }

    public function __toString(): string
    {
        return $this->token ?: '';
    }
}
