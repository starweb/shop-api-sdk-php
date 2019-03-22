<?php

namespace Starweb\Api\Client\Endpoint;

class DeleteProductsLanguage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $langCode;
    /**
     * Delete a product language permanently.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, no, da, fi, de, fr, es
     */
    function __construct(int $productId, string $langCode)
    {
        $this->productId = $productId;
        $this->langCode = $langCode;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{productId}', '{langCode}'), array($this->productId, $this->langCode), '/products/{productId}/languages/{langCode}');
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
     * @throws \Starweb\Api\Client\Exception\DeleteProductsLanguageNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Client\Exception\DeleteProductsLanguageNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}