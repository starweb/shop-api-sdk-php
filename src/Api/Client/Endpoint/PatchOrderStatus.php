<?php

namespace Starweb\Api\Client\Endpoint;

class PatchOrderStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderStatusId;
    /**
    * Updates an oder status. Retrieves the updated `Orderstatus` object. 
                       NB! You are not allowed to update standard order statuses (all statuses with an idCode set)
    *
    * @param int $orderStatusId The order status id
    * @param \Starweb\Api\Client\Model\OrderStatusModel $requestBody 
    */
    function __construct(int $orderStatusId, \Starweb\Api\Client\Model\OrderStatusModel $requestBody)
    {
        $this->orderStatusId = $orderStatusId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PATCH';
    }
    function getUri() : string
    {
        return str_replace(array('{orderStatusId}'), array($this->orderStatusId), '/order-statuses/{orderStatusId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\OrderStatusModel) {
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
     * @throws \Starweb\Api\Client\Exception\PatchOrderStatusBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchOrderStatusForbiddenException
     * @throws \Starweb\Api\Client\Exception\PatchOrderStatusNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderStatusModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderStatusModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchOrderStatusBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchOrderStatusForbiddenException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchOrderStatusNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}