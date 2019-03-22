<?php

namespace Starweb\Api\Client\Endpoint;

class PutProductsMetaData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $metaDataTypeId;
    /**
     * Updates a product meta data. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody 
     */
    function __construct(int $productId, int $metaDataTypeId, \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody)
    {
        $this->productId = $productId;
        $this->metaDataTypeId = $metaDataTypeId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{metaDataTypeId}'), array($this->productId, $this->metaDataTypeId), '/products/{productId}/meta-data/{metaDataTypeId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductMetaDataModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsMetaDataBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsMetaDataNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}