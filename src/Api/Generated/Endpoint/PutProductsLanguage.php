<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductsLanguage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $productId;
    protected $langCode;
    /**
     * Update a product language. Retrieves the update `ProductLanguage` object.
     *
     * @param int $productId The product id
     * @param string $langCode The language code you want to fetch/change. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     * @param \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody 
     */
    public function __construct(int $productId, string $langCode, \Starweb\Api\Generated\Model\ProductLanguageModel $requestBody)
    {
        $this->productId = $productId;
        $this->langCode = $langCode;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productId}', '{langCode}'), array($this->productId, $this->langCode), '/products/{productId}/languages/{langCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductLanguageModel) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductsLanguageNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductLanguageModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModelItem', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutProductsLanguageBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\PutProductsLanguageNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}