<?php

namespace Starweb\Api\Generated\Endpoint;

class GetCustomerExternalService extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
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
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{serviceName}'), array($this->customerId, $this->serviceName), '/customers/{customerId}/external-services/{serviceName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModelItem', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\GetCustomerExternalServiceNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}