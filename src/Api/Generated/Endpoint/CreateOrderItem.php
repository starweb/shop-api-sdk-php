<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateOrderItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    /**
     * Create an order item. Retrieves the create `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param \Starweb\Api\Generated\Model\OrderItemModel $requestBody 
     */
    public function __construct(int $orderId, \Starweb\Api\Generated\Model\OrderItemModel $requestBody)
    {
        $this->orderId = $orderId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}'), array($this->orderId), '/orders/{orderId}/items');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\OrderItemModel) {
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
     * @throws \Starweb\Api\Generated\Exception\CreateOrderItemBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderItemModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\CreateOrderItemBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}