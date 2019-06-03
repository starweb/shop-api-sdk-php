<?php

namespace Starweb\Api\Generated\Endpoint;

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
    public function __construct(int $orderId, string $serviceName)
    {
        $this->orderId = $orderId;
        $this->serviceName = $serviceName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}', '{serviceName}'), array($this->orderId, $this->serviceName), '/orders/{orderId}/external-services/{serviceName}');
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
     * @throws \Starweb\Api\Generated\Exception\GetOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderExternalServicesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderExternalServicesModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetOrderExternalServiceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}