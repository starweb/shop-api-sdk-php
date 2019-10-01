<?php

namespace Starweb\Api\Generated\Endpoint;

class CreateProductTagOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productTagId;
    /**
     * Create a tag option. Tag options can only be created for tags of type `option`. If you try to create options for a tag of type `boolean` an error `405` will be returned. Returns the created `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPostRequestModel $requestBody 
     */
    public function __construct(int $productTagId, \Starweb\Api\Generated\Model\ProductTagOptionPostRequestModel $requestBody)
    {
        $this->productTagId = $productTagId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{productTagId}'), array($this->productTagId), '/product-tags/{productTagId}/options');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductTagOptionPostRequestModel) {
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
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\CreateProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductTagOptionBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (405 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\CreateProductTagOptionMethodNotAllowedException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}