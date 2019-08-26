<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductMetaDataType extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $metaDataTypeId;
    /**
     * Update a product meta data type. Retrieves the updated `ProductMetaDataType` object
     *
     * @param int $metaDataTypeId The meta data types id
     * @param \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody 
     */
    public function __construct(int $metaDataTypeId, \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable $requestBody)
    {
        $this->metaDataTypeId = $metaDataTypeId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{metaDataTypeId}'), array($this->metaDataTypeId), '/product-meta-data-types/{metaDataTypeId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductMetaDataTypeModelUpdatable) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMetaDataTypeModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataTypeModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductMetaDataTypeNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}