<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductsBundledProduct extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $bundledProductId;
    /**
     * Deletes a bundled product permanently.
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     */
    public function __construct(int $productId, int $bundledProductId)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}'), array($this->productId, $this->bundledProductId), '/products/{productId}/bundled-products/{bundledProductId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsBundledProductNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductsBundledProductNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}