<?php

namespace Starweb\Api\Model\PaymentMethod;

class PaymentMethodCollection
{
    /**
     * A collection of payment methods
     *
     * @var PaymentMethod[]
     */
    protected $data;
    /**
     * A collection of payment methods
     *
     * @return PaymentMethod[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of payment methods
     *
     * @param PaymentMethod[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
