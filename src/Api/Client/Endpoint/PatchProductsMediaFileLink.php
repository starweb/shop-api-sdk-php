<?php

namespace Starweb\Api\Client\Endpoint;

class PatchProductsMediaFileLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $mediaFileId;
    /**
    * Updates a product media file link. 
                       Retrieves the update `ProductMediaFileLink` object.
    *
    * @param int $productId The product id
    * @param int $mediaFileId The media file id of the link you want to fetch/change
    * @param \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody 
    */
    function __construct(int $productId, int $mediaFileId, \Starweb\Api\Client\Model\ProductMediaFileLinkModel $requestBody)
    {
        $this->productId = $productId;
        $this->mediaFileId = $mediaFileId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PATCH';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{mediaFileId}'), array($this->productId, $this->mediaFileId), '/products/{productId}/media-files/{mediaFileId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductMediaFileLinkModel) {
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
     * @throws \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductMediaFileLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductMediaFileLinkModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PatchProductsMediaFileLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}