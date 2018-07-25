<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ModelInterface;
use Starweb\HttpClient\EnhancedHttpClient;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class Resource implements ResourceInterface
{
    /**
     * @var EnhancedHttpClient
     */
    private $client;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var array
     */
    private $pathParameters;

    /**
     * Resource constructor.
     *
     * @param EnhancedHttpClient $client
     * @param Serializer $serializer
     */
    public function __construct(EnhancedHttpClient $client, array $pathParameters = [])
    {
        $this->client = $client;
        $this->pathParameters = $pathParameters;
    }

    /**
     * @return EnhancedHttpClient
     */
    protected function getClient(): EnhancedHttpClient
    {
        return $this->client;
    }

    protected function createResource(string $path, ModelInterface $model)
    {
        $params = $this->getSerializer()->serialize($model, 'json');

        return $this->client->post($path, $params);
    }

    protected function updateResource(string $path, ModelInterface $model)
    {
        $params = $this->getSerializer()->serialize($model, 'json');

        return $this->client->put($path, $params);
    }

    /**
     * @return Serializer
     */
    protected function getSerializer(): Serializer
    {
        if (!$this->serializer) {
            $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
        }

        return $this->serializer;
    }

    public function getResolvedEndpoint(): string
    {
        return $this->resolveEndpoint();
    }

    private function resolveEndpoint()
    {
        $endpoint = $this->getEndpoint();
        foreach ($this->resolvePathParameters() as $parameter => $value) {
            $endpoint = preg_replace(sprintf('/\{%s\}/', $parameter), $value, $endpoint);
        }

        return $endpoint;
    }

    private function resolvePathParameters(): array
    {
        $resolver = $this->getPathParameterResolver();
        return $resolver->resolve($this->pathParameters);
    }

    abstract protected function getEndpoint(): string;
    abstract protected function getPathParameterResolver(): OptionsResolver;
}
