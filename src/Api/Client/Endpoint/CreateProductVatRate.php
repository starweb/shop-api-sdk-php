<?php

namespace Starweb\Api\Client\Endpoint;

class CreateProductVatRate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    /**
     * Creates a product vat rate. Retrieves the create `ProductVatRate` object.
     *
     * @param int $productId The products id
     * @param \Starweb\Api\Client\Model\ProductVatRateModel $requestBody 
     */
    function __construct(int $productId, \Starweb\Api\Client\Model\ProductVatRateModel $requestBody)
    {
        $this->productId = $productId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}'), array($this->productId), '/products/{productId}/vat-rates');
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
     * @throws \Starweb\Api\Client\Exception\CreateProductVatRateBadRequestException
     *
     * @return null|\Starweb\Api\Client\Model\ProductVatRateModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ProductVatRateModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\CreateProductVatRateBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}