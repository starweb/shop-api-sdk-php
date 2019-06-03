<?php

namespace Starweb\Api\Generated\Endpoint;

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
    * @param \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody 
    */
    public function __construct(int $productId, int $mediaFileId, \Starweb\Api\Generated\Model\ProductMediaFileLinkModel $requestBody)
    {
        $this->productId = $productId;
        $this->mediaFileId = $mediaFileId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{mediaFileId}'), array($this->productId, $this->mediaFileId), '/products/{productId}/media-files/{mediaFileId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductMediaFileLinkModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsMediaFileLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}