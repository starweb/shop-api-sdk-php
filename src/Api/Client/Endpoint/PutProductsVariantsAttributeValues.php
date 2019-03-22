<?php

namespace Starweb\Api\Client\Endpoint;

class PutProductsVariantsAttributeValues extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $attributeId;
    protected $attributeValueId;
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    */
    function __construct(int $attributeId, int $attributeValueId, \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable $requestBody)
    {
        $this->attributeId = $attributeId;
        $this->attributeValueId = $attributeValueId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{attributeId}', '{attributeValueId}'), array($this->attributeId, $this->attributeValueId), '/product-attributes/{attributeId}/values/{attributeValueId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductVariantAttributeValueModelUpdatable) {
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
     * @throws \Starweb\Api\Client\Exception\PutProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsVariantsAttributeValuesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}