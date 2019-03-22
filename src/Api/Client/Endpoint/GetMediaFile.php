<?php

namespace Starweb\Api\Client\Endpoint;

class GetMediaFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $mediaFileId;
    /**
     * Retrieve a `MediaFile` object
     *
     * @param int $mediaFileId The media files id
     */
    function __construct(int $mediaFileId)
    {
        $this->mediaFileId = $mediaFileId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{mediaFileId}'), array($this->mediaFileId), '/media-files/{mediaFileId}');
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
     * @throws \Starweb\Api\Client\Exception\GetMediaFileNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\MediaFileModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\MediaFileModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetMediaFileNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}