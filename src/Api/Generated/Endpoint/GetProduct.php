<?php

namespace Starweb\Api\Generated\Endpoint;

class GetProduct extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    /**
     * Retrieves the `Product` object.
     *
     * @param int $productId The product id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=variants (to include product variants); ?include=variants,languages (to include both product variants and languages). Available includes: `primaryVariant`, `primaryVariant.prices`, `mediaFiles`, `languages`, `vatRates`, `categories`, `unit`, `metaData`, `bundledProducts`, `bundledProducts.prices`, `tags`. NOTE! Only one variant is included in result for performance reason. To fetch all variants, instead use /products/x/variants (unnecessary if hasSeveralVariants is false)
     * }
     */
    public function __construct(int $productId, array $queryParameters = array())
    {
        $this->productId = $productId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}'), array($this->productId), '/products/{productId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
        $optionsResolver->setDefined(array('include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\GetProductNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetProductNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}