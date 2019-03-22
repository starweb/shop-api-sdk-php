<?php

namespace Starweb\Api\Client\Endpoint;

class PutAttribute extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $attributeId;
    /**
    * Updates a product variant attribute.
                       Retrieves the updated `ProductVariantAttribute` object.
    *
    * @param int $attributeId The attribute value id
    * @param \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody 
    */
    function __construct(int $attributeId, \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable $requestBody)
    {
        $this->attributeId = $attributeId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{attributeId}'), array($this->attributeId), '/product-attributes/{attributeId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductVariantAttributeModelUpdatable) {
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
     * @throws \Starweb\Api\Client\Exception\PutAttributeBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutAttributeBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}