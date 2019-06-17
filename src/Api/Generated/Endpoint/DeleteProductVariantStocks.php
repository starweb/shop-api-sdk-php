<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductVariantStocks extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    protected $stockLocationId;
    /**
     * Deletes a product variant stock permanently.
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
        return 'DELETE';
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
     * @throws \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}