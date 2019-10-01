<?php

namespace Starweb\Api\Generated\Endpoint;

class ListProducts extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns a list of products.
     *
     * @param array $queryParameters {
     *     @var int $page The page of products to return
     *     @var string $sortBy Sort the result using a specified field. productId is default. Valid options are: productId
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. ASC is default
     *     @var string $createdSince Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $filterVisible Only fetch products visible to visitors. Default is false.
     *     @var string $filterSku Only fetch a product with the specified SKU. Has to follow the pattern of /[A-Za-z0-9._-]+$/
     *     @var string $include If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). <br /><br />Available includes: `primaryVariant`, `primaryVariant.prices`, `primaryVariant.attributeValues`, `attributes`, `mediaFiles`, `languages`, `vatRates`, `categories`, `unit`, `metaData`, `bundledProducts`, `bundledProducts.prices`, `tags`.<br /><br />NOTE! Only one variant and language is included in the result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false) and to fetch all languages for an object, instead use the individual objects language endpoint
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
        return '/products';
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
        $optionsResolver->setDefined(array('page', 'sortBy', 'sortOrder', 'createdSince', 'updatedSince', 'filterVisible', 'filterSku', 'include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('sortBy', array('string'));
        $optionsResolver->setAllowedTypes('sortOrder', array('string'));
        $optionsResolver->setAllowedTypes('createdSince', array('string'));
        $optionsResolver->setAllowedTypes('updatedSince', array('string'));
        $optionsResolver->setAllowedTypes('filterVisible', array('bool'));
        $optionsResolver->setAllowedTypes('filterSku', array('string'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\ListProductsBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductModelCollection', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Starweb\Api\Generated\Exception\ListProductsBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}