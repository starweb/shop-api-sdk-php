<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductTagOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productTagId;
    protected $productTagOptionId;
    /**
     * Partially updates a tag option. Tag options can only be updates for tags of type `option`. If you try to update a tag option for a tag of any other type an error `405` will be returned. Returns the updated `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPatchRequestModel $requestBody 
     */
    public function __construct(int $productTagId, int $productTagOptionId, \Starweb\Api\Generated\Model\ProductTagOptionPatchRequestModel $requestBody)
    {
        $this->productTagId = $productTagId;
        $this->productTagOptionId = $productTagOptionId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{productTagId}', '{productTagOptionId}'), array($this->productTagId, $this->productTagOptionId), '/product-tags/{productTagId}/options/{productTagOptionId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductTagOptionPatchRequestModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (405 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PatchProductTagOptionMethodNotAllowedException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}