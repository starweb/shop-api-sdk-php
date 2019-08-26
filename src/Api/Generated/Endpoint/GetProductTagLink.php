<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductTagLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $tagOptionId;
    /**
     * Retrieves the `ProductTagLink` object
     *
     * @param int $productId The product id
     * @param int $tagOptionId The id of the tag option
     */
    public function __construct(int $productId, int $tagOptionId)
    {
        $this->productId = $productId;
        $this->tagOptionId = $tagOptionId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{tagOptionId}'), array($this->productId, $this->tagOptionId), '/products/{productId}/tags/{tagOptionId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
     * @throws \Starweb\Api\Generated\Exception\GetProductTagLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetProductTagLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}