<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchProductsCategoryLink extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
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
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
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
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryLinkModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchProductsCategoryLinkNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}