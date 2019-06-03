<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductsAttribute extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $attributeId;
    /**
     * Retrieves the `ProductAttribute` object.
     *
     * @param int $productId The product id
     * @param int $attributeId The attribute id you want to fetch.
     */
    public function __construct(int $productId, int $attributeId)
    {
        $this->productId = $productId;
        $this->attributeId = $attributeId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{attributeId}'), array($this->productId, $this->attributeId), '/products/{productId}/attributes/{attributeId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\GetProductsAttributeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantAttributeModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetProductsAttributeNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}