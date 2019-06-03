<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteOrderStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderStatusId;
    /**
    * Deletes an order status. Retrieves the updated `OrderItem` object. 
                       NB! You are not allowed to delete order statuses that is in use by an order, or standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    */
    public function __construct(int $orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderStatusId}'), array($this->orderStatusId), '/order-statuses/{orderStatusId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusForbiddenException
     * @throws \Starweb\Api\Generated\Exception\DeleteOrderStatusNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeleteOrderStatusForbiddenException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeleteOrderStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}