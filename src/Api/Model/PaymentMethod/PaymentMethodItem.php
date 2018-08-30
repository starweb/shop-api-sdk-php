<?php

namespace Starweb\Api\Model\PaymentMethod;

class PaymentMethodItem
{
    /**
     *
     *
     * @var PaymentMethod
     */
    protected $data;
    /**
     *
     *
     * @return PaymentMethod
     */
    public function getData() : ?PaymentMethod
    {
        return $this->data;
    }
    /**
     *
     *
     * @param PaymentMethodModel $data
     *
     * @return self
     */
    public function setData(?PaymentMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
