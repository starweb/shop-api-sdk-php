<?php

namespace Starweb\Api\Client\Endpoint;

class RemoveAddressFromCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $addressType;
    /**
     * Delete a customer address permanently.
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     */
    function __construct(int $customerId, string $addressType)
    {
        $this->customerId = $customerId;
        $this->addressType = $addressType;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{customerId}', '{addressType}'), array($this->customerId, $this->addressType), '/customers/{customerId}/addresses/{addressType}');
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
     * @throws \Starweb\Api\Client\Exception\RemoveAddressFromCustomerNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\RemoveAddressFromCustomerNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}