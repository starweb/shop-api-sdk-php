<?php

namespace Starweb\Api\Client\Endpoint;

class PutOrderExternalService extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $orderId;
    protected $serviceName;
    /**
    * Updates an oder external service. 
                       Retrieves the updated `OrderExternalService` object
    *
    * @param int $orderId The orders id
    * @param string $serviceName The service name
    * @param \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody 
    */
    function __construct(int $orderId, string $serviceName, \Starweb\Api\Client\Model\OrderExternalServiceModel $requestBody)
    {
        $this->orderId = $orderId;
        $this->serviceName = $serviceName;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{orderId}', '{serviceName}'), array($this->orderId, $this->serviceName), '/orders/{orderId}/external-services/{serviceName}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\OrderExternalServiceModel) {
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
     * @throws \Starweb\Api\Client\Exception\PutOrderExternalServiceBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutOrderExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\OrderExternalServicesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\OrderExternalServicesModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutOrderExternalServiceBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutOrderExternalServiceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}