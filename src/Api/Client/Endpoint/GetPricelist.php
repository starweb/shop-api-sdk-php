<?php

namespace Starweb\Api\Client\Endpoint;

class GetPricelist extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $pricelistId;
    /**
     * Retrieves a `Pricelist` object
     *
     * @param int $pricelistId The pricelist id
     */
    function __construct(int $pricelistId)
    {
        $this->pricelistId = $pricelistId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{pricelistId}'), array($this->pricelistId), '/pricelists/{pricelistId}');
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
     * @throws \Starweb\Api\Client\Exception\GetPricelistNotFoundException
     *
     * @return null|\Starweb\Api\Client\Model\PricelistModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\PricelistModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\GetPricelistNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}