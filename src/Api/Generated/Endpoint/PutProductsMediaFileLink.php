<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsMediaFileLink extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
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
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{mediaFileId}'), array($this->productId, $this->mediaFileId), '/products/{productId}/media-files/{mediaFileId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductMediaFileLinkModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductsMediaFileLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}