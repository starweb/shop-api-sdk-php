<?php

namespace Starweb\Api\Generated\Endpoint;

class GetCurrency extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $currencyCode;
    /**
     * Retrieves the details of a currency
     *
     * @param string $currencyCode The currency code
     */
    public function __construct(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{currencyCode}'), array($this->currencyCode), '/currencies/{currencyCode}');
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
     * @throws \Starweb\Api\Generated\Exception\GetCurrencyNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\CurrencyModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\CurrencyModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetCurrencyNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}