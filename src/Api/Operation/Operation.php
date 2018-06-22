<?php

namespace Starweb\Api\Operation;

class Operation implements OperationInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $headers;

    /**
     * Operation constructor.
     *
     * @param string $id
     * @param string $uri
     * @param string $method
     * @param string $body
     * @param array $headers
     */
    public function __construct(string $id, string $uri, string $method, string $body = '', array $headers = [])
    {
        $this->id       = $id;
        $this->uri      = $uri;
        $this->method   = $method;
        $this->body     = $body;
        $this->headers  = $headers;
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
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function __toString()
    {
        return $this->id;
    }
}
