<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductStockStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Create a product stock status. Retrieves the created `ProductStockStatus` object.
     *
     * @param \Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody 
     */
    public function __construct(\Starweb\Api\Generated\Model\ProductStockStatusRequestModel $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/product-stock-statuses';
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductStockStatusBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductStockStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductStockStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}