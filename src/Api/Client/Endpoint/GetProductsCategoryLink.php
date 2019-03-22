<?php

namespace Starweb\Api\Client\Endpoint;

class GetProductsCategoryLink extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $categoryId;
    /**
     * Retrieves the `ProductCategoryLink` object
     *
     * @param int $productId The product id
     * @param int $categoryId The category id
     */
    function __construct(int $productId, int $categoryId)
    {
        $this->productId = $productId;
        $this->categoryId = $categoryId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{categoryId}'), array($this->productId, $this->categoryId), '/products/{productId}/categories/{categoryId}');
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
     * @throws \Starweb\Api\Client\Exception\GetProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductCategoryLinkModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductCategoryLinkModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetProductsCategoryLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}