<?php

namespace Starweb\Authentication;

final class ClientCredentials
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $secret;

    /**
     * ClientCredentials constructor.
     * @param string $id
     * @param string $secret
     */
    public function __construct(string $id, string $secret)
    {
        $this->id = $id;
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
}
