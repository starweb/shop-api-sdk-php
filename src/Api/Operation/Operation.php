<?php

namespace Starweb\Api\Operation;

use Starweb\Api\Resource\ResourceInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class Operation implements OperationInterface
{
    /**
     * @var ResourceInterface
     */
    protected $resource;

    private $queryParameters;

    private $pathParameters;

    private $headers;

    /**
     * Operation constructor.
     * @param array $queryParameters
     * @param array $pathParameters
     * @param array $headers
     */
    public function __construct(
        ResourceInterface $resource,
        array $queryParameters = [],
        array $pathParameters = [],
        array $headers = []
    ) {
        $this->resource = $resource;
        $this->queryParameters = $this->getQueryParametersResolver()->resolve($queryParameters);
        $this->pathParameters = $this->getPathParametersResolver()->resolve($pathParameters);
        $this->headers = $headers;
    }

    abstract public function getMethod(): string;

    abstract public function getPath(): string;

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getQueryParameters(): array
    {
        return $this->queryParameters;
    }

    protected function getQueryParametersResolver(): OptionsResolver
    {
        return $this->resource->getQueryParametersResolver();
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        return $this->resource->getPathParametersResolver();
    }

    public function getResolvedPath(): string
    {
        return $this->resolvePath();
    }

    protected function resolvePath()
    {
        $path = $this->getPath();
        foreach ($this->pathParameters as $parameter => $value) {
            $path = preg_replace(sprintf('/\{%s\}/', $parameter), $value, $path);
        }

        return $path;
    }
}
