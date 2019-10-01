<?php

namespace Starweb\Api\Generated\Endpoint;

class ListProductCategories extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns a list of product categories
     *
     * @param array $queryParameters {
     *     @var int $page The page of categories to return
     *     @var string $externalId Use to fetch categories with a specific external id
     *     @var int $parent Use to fetch only categories with this parentId
     *     @var bool $filterVisible Only fetch categories visible to visitors
     *     @var string $include If you want to include child data in the result. Example: ?include=languages (to include language based data such as category names, description, etc). Available includes: languages
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/product-categories';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'externalId', 'parent', 'filterVisible', 'include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('externalId', array('string'));
        $optionsResolver->setAllowedTypes('parent', array('int'));
        $optionsResolver->setAllowedTypes('filterVisible', array('bool'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\ListProductCategoriesBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductCategoryModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelCollection', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\ListProductCategoriesBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}