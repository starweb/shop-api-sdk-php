<?php

namespace Starweb\Api\Client\Endpoint;

class ListOrderAddresses extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    /**
     * Returns a list o order addresses
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
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{orderId}'), array($this->orderId), '/orders/{orderId}/addresses');
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
     *
     * @return null|\Starweb\Api\Client\Model\OrderAddressCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderAddressCollection', 'json');
        }
    }
}