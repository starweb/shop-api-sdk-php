<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ModelInterface;
use Starweb\Api\Operation\OperationInterface;
use Starweb\Api\Operation\UploadFileOperation;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Message\DecoratedResponse;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class Resource implements ResourceInterface
{
    /**
     * @var DecoratedHttpClient
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
     * @param DecoratedHttpClient $client
     * @param array $pathParameters
     *
     * @throws MissingOptionsException thrown if the resource configures some required path parameters which are
     *                                 missing in the pathParameters attribute
     */
    public function __construct(DecoratedHttpClient $client, array $pathParameters = [])
    {
        $this->client = $client;
        $this->pathParameters = $this->getPathParametersResolver()->resolve($pathParameters);
    }

    /**
     * @return DecoratedHttpClient
     */
    protected function getClient(): DecoratedHttpClient
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

    public function getPathParameters(): array
    {
        return $this->pathParameters;
    }

    public function getPathParametersResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    public function performOperation(OperationInterface $operation): DecoratedResponse
    {
        if ($operation instanceof UploadFileOperation) {
            return $this->performUploadFileOperation($operation);
        }

        if ('GET' === $operation->getMethod() || 'HEAD' === $operation->getMethod()) {
            $parameters = $operation->getResolvedParameters();
        } else {
            $parameters = $operation->getParameters();
        }

        return call_user_func_array([$this->client, strtolower($operation->getMethod())], [
            $operation->getResolvedPath(),
            $parameters,
            $operation->getHeaders(),
        ]);
    }

    private function performUploadFileOperation(UploadFileOperation $operation)
    {
        return call_user_func_array([$this->client, 'uploadFile'], [
            $operation->getMethod(),
            $operation->getResolvedPath(),
            $operation->getUploadFile(),
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
