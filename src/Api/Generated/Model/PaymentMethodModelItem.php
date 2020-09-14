<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModelItem
{
    /**
     * 
     *
     * @var PaymentMethodModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return PaymentMethodModel|null
     */
    public function getData() : ?PaymentMethodModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PaymentMethodModel|null $data
     *
     * @return self
     */
    public function setData(?PaymentMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}