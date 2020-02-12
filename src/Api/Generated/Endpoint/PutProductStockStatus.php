<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductStockStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $stockStatusId;
    /**
     * Updates a product stock status. Retrieves the update `ProductStockStatus` object.
     *
     * @param int $stockStatusId The stock status id
     * @param \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody 
     */
    public function __construct(int $stockStatusId, \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody)
    {
        $this->stockStatusId = $stockStatusId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{stockStatusId}'), array($this->stockStatusId), '/product-stock-statuses/{stockStatusId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductStockStatusRequestModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductStockStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductStockStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductStockStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}