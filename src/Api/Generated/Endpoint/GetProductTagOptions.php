<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProductTagOptions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productTagId;
    protected $productTagOptionId;
    /**
     * Retrieves a `TagOption` object
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
        return 'GET';
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
     * @throws \Starweb\Api\Generated\Exception\GetProductTagOptionsNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetProductTagOptionsNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}