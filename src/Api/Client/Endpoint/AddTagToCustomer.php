<?php

namespace Starweb\Api\Client\Endpoint;

class AddTagToCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    /**
     * Add a tag to a customer. Retrieves the created `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param \Starweb\Api\Client\Model\CustomerAddedTagModel $requestBody 
     */
    function __construct(int $customerId, \Starweb\Api\Client\Model\CustomerAddedTagModel $requestBody)
    {
        $this->customerId = $customerId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{customerId}'), array($this->customerId), '/customers/{customerId}/tags');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\CustomerAddedTagModel) {
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
     * @throws \Starweb\Api\Client\Exception\AddTagToCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddedTagModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\CustomerAddedTagModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\AddTagToCustomerBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}