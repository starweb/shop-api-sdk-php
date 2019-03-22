<?php

namespace Starweb\Api\Client\Endpoint;

class GetCustomerTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $tagId;
    /**
     * Retrieves a `CustomerTag` object
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     */
    function __construct(int $customerId, int $tagId)
    {
        $this->customerId = $customerId;
        $this->tagId = $tagId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{customerId}', '{tagId}'), array($this->customerId, $this->tagId), '/customers/{customerId}/tags/{tagId}');
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
     * @throws \Starweb\Api\Client\Exception\GetCustomerTagNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\CustomerAddedTagModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\CustomerAddedTagModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetCustomerTagNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}