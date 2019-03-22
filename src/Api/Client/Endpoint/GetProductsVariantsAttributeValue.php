<?php

namespace Starweb\Api\Client\Endpoint;

class GetProductsVariantsAttributeValue extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $attributeId;
    protected $attributeValueId;
    /**
     * Retrieves the `ProductVariantAttributeValue` object.
     *
     * @param int $attributeId The attribute id
     * @param int $attributeValueId The attribe value id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=attribute (to include the attribute the values belongs to). Available includes: attribute
     * }
     */
    function __construct(int $attributeId, int $attributeValueId, array $queryParameters = array())
    {
        $this->attributeId = $attributeId;
        $this->attributeValueId = $attributeValueId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{attributeId}', '{attributeValueId}'), array($this->attributeId, $this->attributeValueId), '/product-attributes/{attributeId}/values/{attributeValueId}');
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
        $optionsResolver->setDefined(array('include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\GetProductsVariantsAttributeValueNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVariantAttributeValueModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetProductsVariantsAttributeValueNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}