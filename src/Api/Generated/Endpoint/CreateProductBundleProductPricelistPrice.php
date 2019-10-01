<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductBundleProductPricelistPrice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $bundledProductId;
    /**
    * Creates a bundled product pricelist price. 
                       Retrieves the created `ProductBundleProductPricelistPrice` object
    *
    * @param int $productId The products id
    * @param int $bundledProductId The bundled products id
    * @param \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody 
    */
    public function __construct(int $productId, int $bundledProductId, \Starweb\Api\Generated\Model\ProductBundleProductPriceModel $requestBody)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}'), array($this->productId, $this->bundledProductId), '/products/{productId}/bundled-products/{bundledProductId}/prices');
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductBundleProductPricelistPriceBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductBundleProductPricelistPriceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}