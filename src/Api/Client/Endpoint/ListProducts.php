<?php

namespace Starweb\Api\Client\Endpoint;

class ListProducts extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Returns a list of products.
     *
     * @param array $queryParameters {
     *     @var int $page The page of products to return
     *     @var string $createdSince Use this to only fetch products that has been created since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var string $updatedSince Use this to only fetch products that has been modified since a certain time. The time should be formatted using ISO-8601 (url encoded)
     *     @var bool $filterVisible Only fetch products visible to visitors
     *     @var string $include If you want to include child data in the result. Example: ?include=primaryVariant (to include primary product variant);?include=primaryVariant,languages (to include both primary product variant and languages). Available includes: primaryVariant, primaryVariant.prices, primaryVariant.attributes, attributes, mediaFiles, languages, vatRates, categories, unit, metaData. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants(unnecessary if hasSeveralVariants is false)
     * }
     */
    function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/products';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'createdSince', 'updatedSince', 'filterVisible', 'include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('createdSince', array('string'));
        $optionsResolver->setAllowedTypes('updatedSince', array('string'));
        $optionsResolver->setAllowedTypes('filterVisible', array('bool'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\ListProductsBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\ListProductsBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}