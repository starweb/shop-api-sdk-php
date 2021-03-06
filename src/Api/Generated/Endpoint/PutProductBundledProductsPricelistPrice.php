<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductBundledProductsPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $bundledProductId;
    protected $pricelistId;
    /**
    * Updates a bundled product pricelist price. 
                       Retrieves the updated `ProductBundleProductPricelistPrice` object
    *
    * @param int $productId The product id
    * @param int $bundledProductId The bundled products id
    * @param int $pricelistId The pricelist id
    * @param \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody 
    */
    public function __construct(int $productId, int $bundledProductId, int $pricelistId, \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
        $this->pricelistId = $pricelistId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}', '{pricelistId}'), array($this->productId, $this->bundledProductId, $this->pricelistId), '/products/{productId}/bundled-products/{bundledProductId}/prices/{pricelistId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductBundleProductPriceModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductBundledProductsPricelistPriceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}