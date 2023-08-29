<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModelItem extends \ArrayObject
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
     * 
     *
     * @var PaymentMethodModel
     */
    protected $data;
    /**
     * 
     *
     * @return PaymentMethodModel
     */
    public function getData() : PaymentMethodModel
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
    public function setData(PaymentMethodModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}