<?php

namespace Starweb\Api\Generated\Endpoint;

class GetCustomerExternalService extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $serviceName;
    /**
     * Retrieves a `CustomerExternalService` object
     *
     * @param int $customerId The customers id
     * @param string $serviceName The service name
     */
    public function __construct(int $customerId, string $serviceName)
    {
        $this->customerId = $customerId;
        $this->serviceName = $serviceName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{serviceName}'), array($this->customerId, $this->serviceName), '/customers/{customerId}/external-services/{serviceName}');
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
     * @throws \Starweb\Api\Generated\Exception\GetCustomerExternalServiceNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerExternalServicesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetCustomerExternalServiceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}