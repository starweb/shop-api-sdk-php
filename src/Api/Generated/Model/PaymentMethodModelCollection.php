<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A collection of payment methods
     *
     * @var PaymentMethodModel[]
     */
    protected $data;
    /**
     * A collection of payment methods
     *
     * @return PaymentMethodModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of payment methods
     *
     * @param PaymentMethodModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}