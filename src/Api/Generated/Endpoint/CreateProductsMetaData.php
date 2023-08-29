<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductsMetaData extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $productId;
    /**
     * Deprecated: use the [putProductsMetaData](#operation/putProductsMetaData) operation to create a new product meta data for the `metaDataTypeId` instead. Creates a product meta data. Retrieves the created `ProductMetaData` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody 
     */
    public function __construct(int $productId, \Starweb\Api\Generated\Model\ProductMetaDataModelUpdatable $requestBody)
    {
        $this->productId = $productId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}'), array($this->productId), '/products/{productId}/meta-data');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductsMetaDataBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\CreateProductsMetaDataBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}