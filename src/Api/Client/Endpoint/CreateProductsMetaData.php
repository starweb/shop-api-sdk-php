<?php

namespace Starweb\Api\Client\Endpoint;

class CreateProductsMetaData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    /**
     * Creates a product meta data. Retrieves the created `ProductMetaData` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody 
     */
    function __construct(int $productId, \Starweb\Api\Client\Model\ProductMetaDataModelUpdatable $requestBody)
    {
        $this->productId = $productId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}'), array($this->productId), '/products/{productId}/meta-data');
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
     * @throws \Starweb\Api\Client\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductMetaDataModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\CreateProductsMetaDataBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}