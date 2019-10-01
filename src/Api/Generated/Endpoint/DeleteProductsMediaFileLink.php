<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductsMediaFileLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $mediaFileId;
    /**
     * Deletes the product media file link permanently.
     *
     * @param int $productId The product id
     * @param int $mediaFileId The media file id of the link you want to fetch/change
     */
    public function __construct(int $productId, int $mediaFileId)
    {
        $this->productId = $productId;
        $this->mediaFileId = $mediaFileId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{mediaFileId}'), array($this->productId, $this->mediaFileId), '/products/{productId}/media-files/{mediaFileId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\DeleteProductsMediaFileLinkNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductsMediaFileLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}