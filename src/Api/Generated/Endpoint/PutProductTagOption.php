<?php

namespace Starweb\Api\Generated\Endpoint;

class PutProductTagOption extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $productTagId;
    protected $productTagOptionId;
    /**
     * Update a tag option. Tag options can only be updated for tags of type `option`. If you try to update a tag option for a tag of any other type an error `405` will be returned. Returns the updated `ProductTagOption` object.
     *
     * @param int $productTagId The product tag id
     * @param int $productTagOptionId The product tag option id
     * @param \Starweb\Api\Generated\Model\ProductTagOptionPutRequestModel $requestBody 
     */
    public function __construct(int $productTagId, int $productTagOptionId, \Starweb\Api\Generated\Model\ProductTagOptionPutRequestModel $requestBody)
    {
        $this->productTagId = $productTagId;
        $this->productTagOptionId = $productTagOptionId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{productTagId}', '{productTagOptionId}'), array($this->productTagId, $this->productTagOptionId), '/product-tags/{productTagId}/options/{productTagOptionId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\ProductTagOptionPutRequestModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionBadRequestException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionNotFoundException
     * @throws \Starweb\Api\Generated\Exception\PutProductTagOptionMethodNotAllowedException
     *
     * @return null|\Starweb\Api\Generated\Model\ProductTagOptionModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ProductTagOptionModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductTagOptionBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductTagOptionNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
        if (is_null($contentType) === false && (405 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PutProductTagOptionMethodNotAllowedException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}