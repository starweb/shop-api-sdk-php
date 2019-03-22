<?php

namespace Starweb\Api\Client\Endpoint;

class DeleteOrder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    /**
     * Delete an order permanently
     *
     * @param int $orderId The orders id
     */
    function __construct(int $orderId)
    {
        $this->orderId = $orderId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{orderId}'), array($this->orderId), '/orders/{orderId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\DeleteOrderNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\DeleteOrderNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}