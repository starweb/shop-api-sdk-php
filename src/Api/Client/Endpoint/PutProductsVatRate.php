<?php

namespace Starweb\Api\Client\Endpoint;

class PutProductsVatRate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $countryCode;
    /**
     * Updates a product vat rate. Retrieves the update `ProductVatRate` object.
     *
     * @param int $productId The product id
     * @param string $countryCode The country code for the vat rate to fetch/manipulate
     * @param \Starweb\Api\Client\Model\ProductVatRateModel $requestBody 
     */
    function __construct(int $productId, string $countryCode, \Starweb\Api\Client\Model\ProductVatRateModel $requestBody)
    {
        $this->productId = $productId;
        $this->countryCode = $countryCode;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{countryCode}'), array($this->productId, $this->countryCode), '/products/{productId}/vat-rates/{countryCode}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Client\Model\ProductVatRateModel) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Client\Exception\PutProductsVatRateBadRequestException
     * @throws \Starweb\Api\Client\Exception\PutProductsVatRateNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVatRateModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsVatRateBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\PutProductsVatRateNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}