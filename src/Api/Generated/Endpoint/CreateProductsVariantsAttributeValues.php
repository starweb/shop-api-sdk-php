<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductsVariantsAttributeValues extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $attributeId;
    /**
    * Creates a product variant attribute value.
                       Retrieves the created `ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    */
    public function __construct(int $attributeId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody)
    {
        $this->attributeId = $attributeId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeId}'), array($this->attributeId), '/product-attributes/{attributeId}/values');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable) {
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelCollection', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductsVariantsAttributeValuesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}