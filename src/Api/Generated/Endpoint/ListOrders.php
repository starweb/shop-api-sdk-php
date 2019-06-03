<?php

namespace Starweb\Api\Generated\Endpoint;

class ListOrders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Returns a list of orders.
     *
     * @param array $queryParameters {
     *     @var int $page The page of orders to return
     *     @var bool $includeNonCompletePayments Set to true if you want to fetch orders that has not been completed yet. An order is ”completed” when the payment step has been completed successfully.
     *     @var string $filterQuery A filter query to filter the fetched orders by. Will search in fields such as: customer/company name, order items sku and description, etc
     *     @var int $filterPaymentMethodId Only fetch orders with a certain payment method Id
     *     @var int $filterShippingMethodId Only fetch orders with a certain shipping method Id
     *     @var string $ordersCreatedAfter Only fetch orders created after this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var string $ordersCreatedBefore Only fetch orders created before this timestamp (The time should be formatted using ISO-8601 and url encoded)
     *     @var int $statusFilter Only fetch orders with the specifiec order status. Use order status ID
     *     @var string $sortBy Sort the result using a specified field. orderId is default
     *     @var string $sortOrder ASC for an ascending sort order; or DESC for a descending sort order. DESC is default
     *     @var string $include If you want to include child data in the result. Example: ?include=items (to include order items) or ?include=items,externalServices (to include order items as well as external ids). Available includes: items, externalServices, status, customer, addresses
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/orders';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
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
        $optionsResolver->setDefined(array('page', 'includeNonCompletePayments', 'filterQuery', 'filterPaymentMethodId', 'filterShippingMethodId', 'ordersCreatedAfter', 'ordersCreatedBefore', 'statusFilter', 'sortBy', 'sortOrder', 'include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('includeNonCompletePayments', array('bool'));
        $optionsResolver->setAllowedTypes('filterQuery', array('string'));
        $optionsResolver->setAllowedTypes('filterPaymentMethodId', array('int'));
        $optionsResolver->setAllowedTypes('filterShippingMethodId', array('int'));
        $optionsResolver->setAllowedTypes('ordersCreatedAfter', array('string'));
        $optionsResolver->setAllowedTypes('ordersCreatedBefore', array('string'));
        $optionsResolver->setAllowedTypes('statusFilter', array('int'));
        $optionsResolver->setAllowedTypes('sortBy', array('string'));
        $optionsResolver->setAllowedTypes('sortOrder', array('string'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Starweb\Api\Generated\Exception\ListOrdersBadRequestException
     *
     * @return null|\Starweb\Api\Generated\Model\OrderModelCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\OrderModelCollection', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\ListOrdersBadRequestException($serializer->deserialize($body, 'Starweb\\Api\\Generated\\Model\\ErrorModel', 'json'));
        }
    }
}