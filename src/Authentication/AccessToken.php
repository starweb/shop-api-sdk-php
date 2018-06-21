<?php

namespace Starweb\Authentication;

final class AccessToken implements TokenInterface
{
    /** @var string */
    private $token;

    /**
     * AccessToken constructor.
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
