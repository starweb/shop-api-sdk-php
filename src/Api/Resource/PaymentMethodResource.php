<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\PaymentMethod\PaymentMethod;
use Starweb\Api\Model\PaymentMethod\PaymentMethodCollection;
use Starweb\Api\Model\PaymentMethod\PaymentMethodItem;
use Starweb\Api\Operation\PaymentMethod\ListPaymentMethods;
use Starweb\Api\Operation\PaymentMethod\RetrievePaymentMethod;

class PaymentMethodResource extends Resource
{
    /**
     * @return PaymentMethodCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): PaymentMethodCollection
    {
        $response = $this->performOperation(
            new ListPaymentMethods($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(PaymentMethodCollection::class);
    }

    /**
     * @param string $paymentMethodId
     *
     * @return PaymentMethod
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $paymentMethodId): PaymentMethod
    {
        $pathParameters = array_merge($this->getPathParameters(), ['paymentMethodId' => $paymentMethodId]);
        $response = $this->performOperation(
            new RetrievePaymentMethod($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(PaymentMethodItem::class);

        return $item->getData();
    }
}
