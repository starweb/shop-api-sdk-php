<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsVariantsAttributeValues extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $attributeId;
    protected $attributeValueId;
    /**
    * Updates a product variant attribute value.
                       * Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int                                                                     $attributeId The attribute id
    * @param int                                                                     $attributeValueId The attribe value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody
    */
    public function __construct(int $attributeId, int $attributeValueId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody)
    {
        $this->attributeId = $attributeId;
        $this->attributeValueId = $attributeValueId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeId}', '{attributeValueId}'), array($this->attributeId, $this->attributeValueId), '/product-attributes/{attributeId}/values/{attributeValueId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\PutProductsVariantsAttributeValuesBadRequestException
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutProductsVariantsAttributeValuesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}