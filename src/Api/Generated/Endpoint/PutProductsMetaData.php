<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsMetaData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $metaDataTypeId;
    /**
     * Updates a product meta data if it exists or creates a new product meta data for the given `metaDataTypeId` if it does not exist. Retrieves the update `ProductMetaData` object.
     *
     * @param int $productId The product id
     * @param int $metaDataTypeId The meta data type id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody 
     */
    public function __construct(int $productId, int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody)
    {
        $this->productId = $productId;
        $this->metaDataTypeId = $metaDataTypeId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{metaDataTypeId}'), array($this->productId, $this->metaDataTypeId), '/products/{productId}/meta-data/{metaDataTypeId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsMetaDataNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutProductsMetaDataBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutProductsMetaDataNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}