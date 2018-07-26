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

    private $parameters;

    private $pathParameters;

    private $headers;

    /**
     * Operation constructor.
     * @param array $parameters
     * @param array $pathParameters
     * @param array $headers
     */
    public function __construct(
        ResourceInterface $resource,
        array $parameters = [],
        array $pathParameters = [],
        array $headers = []
    ) {
        $this->resource = $resource;
        $this->parameters = $parameters;
        $this->pathParameters = $pathParameters;
        $this->headers = $headers;
    }

    abstract public function getMethod(): string;

    abstract public function getPath(): string;

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    protected function getParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        return $this->resource->getPathParametersResolver();
    }

    public function resolvePathParameters(): array
    {
        $parameters = array_merge($this->resource->getPathParameters(), $this->pathParameters);

        return $this->getPathParametersResolver()->resolve($parameters);
    }

    public function getResolvedPath(): string
    {
        return $this->resolvePath();
    }

    protected function resolvePath()
    {
        $path = $this->getPath();
        foreach ($this->resolvePathParameters() as $parameter => $value) {
            $path = preg_replace(sprintf('/\{%s\}/', $parameter), $value, $path);
        }

        return $path;
    }
}
