<?php

namespace Starweb\Api\Generated\Endpoint;

class GetOrderItem extends \Starweb\Api\Generated\Runtime\Client\BaseEndpoint implements \Starweb\Api\Generated\Runtime\Client\Endpoint
{
    protected $orderId;
    protected $orderItemId;
    /**
     * Retrieves the `OrderItem` object
     *
     * @param int $orderId The orders id
     * @param int $orderItemId The order item id
     * @param array $queryParameters {
     *     @var string $include If you want to include child data in the result. Example: ?include=bundledItems (to include bundled items). Available includes: bundledItems
     * }
     */
    public function __construct(int $orderId, int $orderItemId, array $queryParameters = array())
    {
        $this->orderId = $orderId;
        $this->orderItemId = $orderItemId;
        $this->queryParameters = $queryParameters;
    }
    use \Starweb\Api\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderId}', '{orderItemId}'), array($this->orderId, $this->orderItemId), '/orders/{orderId}/items/{orderItemId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderItemModelItem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderItemModelItem', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Starweb\Api\Generated\Exception\GetOrderItemNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}