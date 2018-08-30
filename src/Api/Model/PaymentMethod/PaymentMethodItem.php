<?php

namespace Starweb\Api\Model\PaymentMethod;

class PaymentMethodItem
{
    /**
     * @var PaymentMethod
     */
    protected $data;

    /**
     * @return PaymentMethod
     */
    public function getData() : ?PaymentMethod
    {
        return $this->data;
    }

    /**
     * @param PaymentMethod $data
     *
     * @return self
     */
    public function setData(PaymentMethod $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
