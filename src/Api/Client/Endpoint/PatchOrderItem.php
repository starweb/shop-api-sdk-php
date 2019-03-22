<?php

namespace Starweb\Api\Client\Endpoint;

class PatchOrderItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    protected $orderItemId;
    /**
     * Updates an oder item. Retrieves the updated `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param \Starweb\Api\Client\Model\OrderItemModel $requestBody 
     */
    function __construct(int $orderId, int $orderItemId, \Starweb\Api\Client\Model\OrderItemModel $requestBody)
    {
        $this->orderId = $orderId;
        $this->orderItemId = $orderItemId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PATCH';
    }
    function getUri() : string
    {
        return str_replace(array('{orderId}', '{orderItemId}'), array($this->orderId, $this->orderItemId), '/orders/{orderId}/items/{orderItemId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\OrderItemModel) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\PatchOrderItemBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderItemModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderItemModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchOrderItemBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchOrderItemNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}