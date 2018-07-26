<?php

namespace Starweb\Api\Operation;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\StreamFactory;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Operation implements OperationInterface
{
    protected $queryParameters;

    protected $pathParameters;

    protected $headers;

    /**
     * Operation constructor.
     * @param array $queryParameters
     * @param array $pathParameters
     * @param array $headers
     */
    public function __construct(array $queryParameters = [], array $pathParameters = [], array $headers = [])
    {
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

    public function getPathParameters(): array
    {
        return $this->pathParameters;
    }

    public function getQueryParameters(): array
    {
        return $this->queryParameters;
    }

    protected function getQueryParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
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
