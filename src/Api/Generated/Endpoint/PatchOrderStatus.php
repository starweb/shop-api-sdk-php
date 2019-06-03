<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchOrderStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderStatusId;
    /**
    * Updates an order status. Retrieves the updated `Orderstatus` object. 
                       NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Generated\Model\OrderStatusModel $requestBody 
    */
    public function __construct(int $orderStatusId, \Starweb\Api\Generated\Model\OrderStatusModel $requestBody)
    {
        $this->orderStatusId = $orderStatusId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderStatusId}'), array($this->orderStatusId), '/order-statuses/{orderStatusId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\OrderStatusModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusForbiddenException
     * @throws \Starweb\Api\Generated\Exception\PatchOrderStatusNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderStatusModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchOrderStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchOrderStatusForbiddenException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchOrderStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}