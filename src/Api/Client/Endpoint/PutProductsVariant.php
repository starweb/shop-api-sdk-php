<?php

namespace Starweb\Api\Client\Endpoint;

class PutProductsVariant extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    /**
     * Updates a product variant. Retrieves the updated `ProductVariant` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param \Starweb\Api\Client\Model\ProductVariantModel $requestBody 
     */
    function __construct(int $productId, int $variantId, \Starweb\Api\Client\Model\ProductVariantModel $requestBody)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}'), array($this->productId, $this->variantId), '/products/{productId}/variants/{variantId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductVariantModel) {
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
     * @throws \Starweb\Api\Client\Exception\PutProductsVariantBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsVariantNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsVariantBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsVariantNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}