<?php

namespace Starweb\Api\Generated\Endpoint;

class DeleteProductTagOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productTagId;
    protected $productTagOptionId;
    /**
     * Delete a tag option permanently. Tag options can only be deleted for tags of type `option`. If you try to delete a tag option for a tag of any other type an error `405` will be returned.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     */
    public function __construct(int $productTagId, int $productTagOptionId)
    {
        $this->productTagId = $productTagId;
        $this->productTagOptionId = $productTagOptionId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{productTagId}', '{productTagOptionId}'), array($this->productTagId, $this->productTagOptionId), '/product-tags/{productTagId}/options/{productTagOptionId}');
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
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeleteProductTagOptionMethodNotAllowedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductTagOptionNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (405 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeleteProductTagOptionMethodNotAllowedException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}