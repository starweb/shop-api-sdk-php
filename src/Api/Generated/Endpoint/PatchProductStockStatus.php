<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductStockStatus extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $stockStatusId;
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Generated\Model\ProductStockStatusModel $requestBody 
     */
    public function __construct(int $stockStatusId, \Starweb\Api\Generated\Model\ProductStockStatusModel $requestBody)
    {
        $this->stockStatusId = $stockStatusId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{stockStatusId}'), array($this->stockStatusId), '/product-stock-statuses/{stockStatusId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductStockStatusModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchProductStockStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchProductStockStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}