<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductsVariantsAttributeValues extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $attributeId;
    protected $attributeValueId;
    /**
    * Updates a product variant attribute value.
                       Retrieves the updated`ProductVariantAttributeValue` object.
    *
    * @param int $attributeId The attribute id
    * @param int $attributeValueId The attribe value id
    * @param \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody 
    */
    public function __construct(int $attributeId, int $attributeValueId, \Starweb\Api\Generated\Model\ProductVariantAttributeValueModelUpdatable $requestBody)
    {
        $this->attributeId = $attributeId;
        $this->attributeValueId = $attributeValueId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{attributeId}', '{attributeValueId}'), array($this->attributeId, $this->attributeValueId), '/product-attributes/{attributeId}/values/{attributeValueId}');
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsAttributeValuesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeValueModelCollection
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModelCollection', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsVariantsAttributeValuesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}