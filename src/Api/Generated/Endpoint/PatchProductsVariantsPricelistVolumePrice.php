<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductsVariantsPricelistVolumePrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $variantId;
    protected $pricelistId;
    protected $quantity;
    /**
    * Updates a product variant pricelist volume price. 
                       Retrieves the updated `ProductVariantPricelistVolumePrice` object
    *
    * @param int $productId The product id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param int $quantity The volume quantity
    * @param \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody 
    */
    public function __construct(int $productId, int $variantId, int $pricelistId, int $quantity, \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->pricelistId = $pricelistId;
        $this->quantity = $quantity;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{pricelistId}', '{quantity}'), array($this->productId, $this->variantId, $this->pricelistId, $this->quantity), '/products/{productId}/variants/{variantId}/prices/{pricelistId}/volume/{quantity}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsVariantsPricelistVolumePriceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}