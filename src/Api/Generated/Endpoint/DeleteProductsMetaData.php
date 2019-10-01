<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductsMetaData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $metaDataTypeId;
    /**
     * Deletes a product meta data permanently.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     */
    public function __construct(int $productId, int $metaDataTypeId)
    {
        $this->productId = $productId;
        $this->metaDataTypeId = $metaDataTypeId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{metaDataTypeId}'), array($this->productId, $this->metaDataTypeId), '/products/{productId}/meta-data/{metaDataTypeId}');
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
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMetaDataNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductsMetaDataNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}