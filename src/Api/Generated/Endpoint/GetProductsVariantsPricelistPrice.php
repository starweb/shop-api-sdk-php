<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductsVariantsPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $variantId;
    protected $pricelistId;
    /**
     * Retrieves the `ProductVariantPricelistPrice` object
     *
     * @param int $productId The product id
     * @param int $variantId The products variants id
     * @param int $pricelistId The pricelist id
     */
    public function __construct(int $productId, int $variantId, int $pricelistId)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->pricelistId = $pricelistId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{pricelistId}'), array($this->productId, $this->variantId, $this->pricelistId), '/products/{productId}/variants/{variantId}/prices/{pricelistId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModelItem', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\GetProductsVariantsPricelistPriceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}