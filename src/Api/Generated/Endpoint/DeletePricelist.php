<?php

namespace Starweb\Api\Generated\Endpoint;

class DeletePricelist extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $pricelistId;
    /**
     * Delete a pricelist permanently. The master pricelist can not be deleted and will return an error `403`
     *
     * @param int $pricelistId The pricelist id
     */
    public function __construct(int $pricelistId)
    {
        $this->pricelistId = $pricelistId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{pricelistId}'), array($this->pricelistId), '/pricelists/{pricelistId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistNotFoundException
     * @throws \Starweb\Api\Generated\Exception\DeletePricelistForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeletePricelistNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\DeletePricelistForbiddenException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}