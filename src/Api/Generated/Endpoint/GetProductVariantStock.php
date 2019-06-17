<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductVariantStock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    protected $stockLocationId;
    /**
     * Retrieves the `ProductVariantStock` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $stockLocationId The stock location id
     */
    public function __construct(int $productId, int $variantId, int $stockLocationId)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->stockLocationId = $stockLocationId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{stockLocationId}'), array($this->productId, $this->variantId, $this->stockLocationId), '/products/{productId}/variants/{variantId}/stocks/{stockLocationId}');
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
     * @throws \Starweb\Api\Generated\Exception\GetProductVariantStockNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantStockModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantStockModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetProductVariantStockNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}