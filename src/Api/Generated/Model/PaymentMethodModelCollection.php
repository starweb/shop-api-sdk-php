<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModelCollection
{
    /**
     * A collection of payment methods
     *
     * @var PaymentMethodModel[]|null
     */
    protected $data;
    /**
     * A collection of payment methods
     *
     * @return PaymentMethodModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of payment methods
     *
     * @param PaymentMethodModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}