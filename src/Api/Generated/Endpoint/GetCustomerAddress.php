<?php

namespace Starweb\Api\Generated\Endpoint;

class GetCustomerAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $addressType;
    /**
     * Retrieves a `CustomerAddress` object
     *
     * @param int $customerId The customers id
     * @param string $addressType The customer address type
     */
    public function __construct(int $customerId, string $addressType)
    {
        $this->customerId = $customerId;
        $this->addressType = $addressType;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{addressType}'), array($this->customerId, $this->addressType), '/customers/{customerId}/addresses/{addressType}');
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
     * @throws \Starweb\Api\Generated\Exception\GetCustomerAddressNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerAddressesModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerAddressesModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetCustomerAddressNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}