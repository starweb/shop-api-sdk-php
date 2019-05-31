<?php

namespace Starweb\Api\Generated\Endpoint;

class RemoveTagFromCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customerId;
    protected $tagId;
    /**
     * Deletes a customer tag permanently.
     *
     * @param int $customerId The customers id
     * @param int $tagId The customer tag id
     */
    public function __construct(int $customerId, int $tagId)
    {
        $this->customerId = $customerId;
        $this->tagId = $tagId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{customerId}', '{tagId}'), array($this->customerId, $this->tagId), '/customers/{customerId}/tags/{tagId}');
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
     * @throws \Starweb\Api\Generated\Exception\RemoveTagFromCustomerNotFoundException
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\RemoveTagFromCustomerNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}