<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServicesModelItem extends \ArrayObject
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
     * @var OrderExternalServiceModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderExternalServiceModel
     */
    public function getData() : OrderExternalServiceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModel $data
     *
     * @return self
     */
    public function setData(OrderExternalServiceModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}