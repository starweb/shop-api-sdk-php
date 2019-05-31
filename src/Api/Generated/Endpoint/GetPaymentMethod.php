<?php

namespace Starweb\Api\Generated\Endpoint;

class GetPaymentMethod extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $paymentMethodId;
    /**
     * Retrieves a `PaymentMethod` object
     *
     * @param int $paymentMethodId The payment method id
     */
    public function __construct(int $paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{paymentMethodId}'), array($this->paymentMethodId), '/payment-methods/{paymentMethodId}');
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
     * @throws \Starweb\Api\Generated\Exception\GetPaymentMethodNotFoundException
     * @return null|\Starweb\Api\Generated\Model\PaymentMethodModelItem
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\PaymentMethodModelItem', 'json');
        }
        if (404 === $status && 'application/json' === $contentType) {
            throw new \Starweb\Api\Generated\Exception\GetPaymentMethodNotFoundException($serializer->deserialize($body, 'Starweb\\Api\\Client\\Model\\ErrorModel', 'json'));
        }
    }
}