<?php

namespace Starweb\Api\Client\Endpoint;

class PatchProductManufacturer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $manufacturerId;
    /**
     * Updates the `ProductManufacturer` object.
     *
     * @param int $manufacturerId The manufacturers id
     * @param \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody 
     */
    function __construct(int $manufacturerId, \Starweb\Api\Client\Model\ProductManufacturerModel $requestBody)
    {
        $this->manufacturerId = $manufacturerId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PATCH';
    }
    function getUri() : string
    {
        return str_replace(array('{manufacturerId}'), array($this->manufacturerId), '/product-manufacturers/{manufacturerId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductManufacturerModel) {
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
     * @throws \Starweb\Api\Client\Exception\PatchProductManufacturerNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductManufacturerModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductManufacturerModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchProductManufacturerNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}