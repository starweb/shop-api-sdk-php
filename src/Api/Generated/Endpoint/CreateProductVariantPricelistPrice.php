<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductVariantPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    /**
    * Creates a product variant pricelist price. 
                       Retrieves the created `ProductVariantPricelistPrice` object
    *
    * @param int $productId The products id
    * @param int $variantId The products variants id
    * @param \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody 
    */
    public function __construct(int $productId, int $variantId, \Starweb\Api\Generated\Model\ProductVariantPriceModel $requestBody)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}'), array($this->productId, $this->variantId), '/products/{productId}/variants/{variantId}/prices');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductVariantPriceModel) {
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistPriceBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantPriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\CreateProductVariantPricelistPriceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}