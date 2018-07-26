<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ModelInterface;
use Starweb\Api\Operation\OperationInterface;
use Starweb\Api\Operation\UploadFileOperation;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;
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
     * @var array
     */
    private $queryParameters;

    /**
     * Resource constructor.
     *
     * @param EnhancedHttpClient $client
     * @param Serializer $serializer
     */
    public function __construct(EnhancedHttpClient $client, array $pathParameters = [], array $queryParameters = [])
    {
        $this->client = $client;
        $this->pathParameters = $this->getPathParametersResolver()->resolve($pathParameters);
        $this->queryParameters = $this->getQueryParametersResolver()->resolve($queryParameters);
    }

    /**
     * @return EnhancedHttpClient
     */
    protected function getClient(): EnhancedHttpClient
    {
        return $this->client;
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

    /**
     * @return array
     */
    protected function getPathParameters(): array
    {
        return $this->pathParameters;
    }

    /**
     * @return array
     */
    protected function getQueryParameters(): array
    {
        return $this->queryParameters;
    }

    public function getPathParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    public function getQueryParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    public function performOperation(OperationInterface $operation): EnhancedResponse
    {
        if ($operation instanceof UploadFileOperation) {
            return $this->performUploadFileOperation($operation);
        }

        return call_user_func_array([$this->client, strtolower($operation->getMethod())], [
            $operation->getResolvedPath(),
            $operation->getQueryParameters(),
            $operation->getHeaders()
        ]);
    }

    private function performUploadFileOperation(UploadFileOperation $operation)
    {
        return call_user_func_array([$this->client, 'uploadFile'], [
            $operation->getMethod(),
            $operation->getResolvedPath(),
            $operation->getUploadFile()
        ]);
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

}
