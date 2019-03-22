<?php

namespace Starweb\Api\Client\Endpoint;

class ListProductsVariantsPricelistPrices extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    /**
     * Returns a list of product variant pricelist prices
     *
     * @param int $productId The products id
     * @param int $variantId The products variants id
     */
    function __construct(int $productId, int $variantId)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}'), array($this->productId, $this->variantId), '/products/{productId}/variants/{variantId}/prices');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\ListProductsVariantsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantPriceModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantPriceModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\ListProductsVariantsPricelistPricesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}