<?php

namespace Starweb\Api\Generated\Endpoint;

class ListProductBundledProductsPricelistPrices extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $productId;
    protected $bundledProductId;
    /**
     * Returns a list of product variant pricelist prices
     *
     * @param int $productId The products id
     * @param int $bundledProductId The bundled products id
     */
    public function __construct(int $productId, int $bundledProductId)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}'), array($this->productId, $this->bundledProductId), '/products/{productId}/bundled-products/{bundledProductId}/prices');
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
     * @throws \Starweb\Api\Generated\Exception\ListProductBundledProductsPricelistPricesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductBundleProductPriceModelCollection
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModelCollection', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\ListProductBundledProductsPricelistPricesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}