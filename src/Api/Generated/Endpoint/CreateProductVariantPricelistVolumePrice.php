<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductVariantPricelistVolumePrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $variantId;
    protected $pricelistId;
    /**
    * Creates a variant volume pricelist price. 
                       Retrieves the created `ProductVariantPricelistVolumePrice` object
    *
    * @param int $productId The products id
    * @param int $variantId The products variants id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody 
    */
    public function __construct(int $productId, int $variantId, int $pricelistId, \Starweb\Api\Generated\Model\ProductVariantVolumePriceModel $requestBody)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->pricelistId = $pricelistId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{pricelistId}'), array($this->productId, $this->variantId, $this->pricelistId), '/products/{productId}/variants/{variantId}/prices/{pricelistId}/volume');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductVariantPricelistVolumePriceBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductVariantVolumePriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductVariantPricelistVolumePriceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}