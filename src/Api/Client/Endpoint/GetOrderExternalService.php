<?php

namespace Starweb\Api\Client\Endpoint;

class GetOrderExternalService extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    protected $serviceName;
    /**
     * Retrieves the `OrderExternalService` object
     *
     * @param int $orderId The orders id
     * @param string $serviceName The service name
     */
    function __construct(int $orderId, string $serviceName)
    {
        $this->orderId = $orderId;
        $this->serviceName = $serviceName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{orderId}', '{serviceName}'), array($this->orderId, $this->serviceName), '/orders/{orderId}/external-services/{serviceName}');
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
     * @throws \Starweb\Api\Client\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderExternalServicesModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetOrderExternalServiceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}