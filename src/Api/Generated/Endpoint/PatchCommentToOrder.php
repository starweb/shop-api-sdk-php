<?php

namespace Starweb\Api\Generated\Endpoint;

class PatchCommentToOrder extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $orderId;
    protected $commentId;
    /**
     * Update a comment for an order. Retrieves the created `OrderComment` object
     *
     * @param int $orderId The orders id
     * @param int $commentId The order comments id
     * @param null|\Starweb\Api\Generated\Model\OrderCommentModel $requestBody 
     */
    public function __construct(int $orderId, int $commentId, ?\Starweb\Api\Generated\Model\OrderCommentModel $requestBody = null)
    {
        $this->orderId = $orderId;
        $this->commentId = $commentId;
        $this->body = $requestBody;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}', '{commentId}'), array($this->orderId, $this->commentId), '/orders/{orderId}/comments/{commentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Starweb\Api\Generated\Model\OrderCommentModel) {
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
     * @throws \Starweb\Api\Generated\Exception\PatchCommentToOrderBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderCommentModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderCommentModelItem', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\PatchCommentToOrderBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}