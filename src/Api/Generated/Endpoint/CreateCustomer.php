<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateCustomer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Creates a `Customer` object
     *
     * @param \Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody 
     */
    public function __construct(\Starweb\Api\Generated\Model\CustomerUpdateModel $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/customers';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\CustomerUpdateModel) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\CreateCustomerBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\CustomerCreatedModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CustomerCreatedModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\CreateCustomerBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}