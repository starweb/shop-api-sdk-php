<?php

namespace Starweb\Api\Generated\Endpoint;

class GetOrderItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $orderId;
    protected $orderItemId;
    /**
     * Retrieves the `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     */
    public function __construct(int $orderId, int $orderItemId)
    {
        $this->orderId = $orderId;
        $this->orderItemId = $orderItemId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}', '{orderItemId}'), array($this->orderId, $this->orderItemId), '/orders/{orderId}/items/{orderItemId}');
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
     * @throws \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderItemModelItem', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}