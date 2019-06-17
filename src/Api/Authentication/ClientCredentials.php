<?php declare(strict_types=1);

namespace Starweb\Api\Authentication;

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

    public function __construct(string $id, string $secret)
    {
        $this->id = $id;
        $this->secret = $secret;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
