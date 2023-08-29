<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductVariantStocks extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
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
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{variantId}', '{stockLocationId}'), array($this->productId, $this->variantId, $this->stockLocationId), '/products/{productId}/variants/{variantId}/stocks/{stockLocationId}');
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
     * @throws \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductVariantStocksNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}