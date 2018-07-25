<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ModelInterface;
use Starweb\Api\Operation\Operation;
use Starweb\Api\Operation\OperationInterface;
use Starweb\Api\Operation\UploadFileOperation;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;
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

    public function performOperation(OperationInterface $operation): EnhancedResponse
    {
        if ($operation instanceof UploadFileOperation) {
            return $this->performUploadFileOperation($operation);
        }

        return call_user_func_array([$this->client, strtolower($operation->getMethod())], [
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
}
