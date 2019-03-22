<?php

namespace Starweb\Api\Client\Endpoint;

class GetProductsMediaFileLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $mediaFileId;
    /**
     * Retrieves the `ProductMediaFileLink` object.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     */
    function __construct(int $productId, int $mediaFileId)
    {
        $this->productId = $productId;
        $this->mediaFileId = $mediaFileId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{mediaFileId}'), array($this->productId, $this->mediaFileId), '/products/{productId}/media-files/{mediaFileId}');
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
     * @throws \Starweb\Api\Client\Exception\GetProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductMediaFileLinkModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetProductsMediaFileLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}