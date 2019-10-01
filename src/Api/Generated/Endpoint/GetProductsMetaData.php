<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductsMetaData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $metaDataTypeId;
    /**
     * Retrieves the `ProductMetaData` object.
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
        return 'GET';
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
     * @throws \Starweb\Api\Generated\Exception\GetProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelItem', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\GetProductsMetaDataNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}