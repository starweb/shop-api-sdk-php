<?php

namespace Starweb\Api\Client\Endpoint;

class DeleteProductsVatRate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $countryCode;
    /**
     * Deletes the product vat rate permanently.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     */
    function __construct(int $productId, string $countryCode)
    {
        $this->productId = $productId;
        $this->countryCode = $countryCode;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{countryCode}'), array($this->productId, $this->countryCode), '/products/{productId}/vat-rates/{countryCode}');
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
     * @throws \Starweb\Api\Client\Exception\DeleteProductsVatRateNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\DeleteProductsVatRateNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}