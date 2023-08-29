<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsBundledProduct extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $productId;
    protected $bundledProductId;
    /**
     * Updates a bundled product. Retrieves the updated `BundledProduct` object
     *
     * @param int $productId The product id
     * @param int $bundledProductId The bundled products id
     * @param \Starweb\Api\Generated\Model\BundledProductsModel $requestBody 
     */
    public function __construct(int $productId, int $bundledProductId, \Starweb\Api\Generated\Model\BundledProductsModel $requestBody)
    {
        $this->productId = $productId;
        $this->bundledProductId = $bundledProductId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{bundledProductId}'), array($this->productId, $this->bundledProductId), '/products/{productId}/bundled-products/{bundledProductId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\BundledProductsModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsBundledProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\BundledProductsModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\BundledProductsModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductsBundledProductBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductsBundledProductNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}