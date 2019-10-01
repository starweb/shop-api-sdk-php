<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsCategoryLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $productId;
    protected $categoryId;
    /**
     * Update a product category link. Retrieves the update `ProductCategoryLink` object.
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     * @param \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody 
     */
    public function __construct(int $productId, int $categoryId, \Starweb\Api\Generated\Model\ProductCategoryLinkModel $requestBody)
    {
        $this->productId = $productId;
        $this->categoryId = $categoryId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{categoryId}'), array($this->productId, $this->categoryId), '/products/{productId}/categories/{categoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductCategoryLinkModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelItem', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductsCategoryLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\PutProductsCategoryLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}