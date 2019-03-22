<?php

namespace Starweb\Api\Client\Endpoint;

class GetProductMetaDataType extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $metaDataTypeId;
    /**
     * Retrieves the `ProductMetaDataType` object.
     *
     * @param int $metaDataTypeId The meta data types id
     */
    function __construct(int $metaDataTypeId)
    {
        $this->metaDataTypeId = $metaDataTypeId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{metaDataTypeId}'), array($this->metaDataTypeId), '/product-meta-data-types/{metaDataTypeId}');
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
     * @throws \Starweb\Api\Client\Exception\GetProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMetaDataTypeModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductMetaDataTypeModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetProductMetaDataTypeNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}