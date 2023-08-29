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
     * @var OrderExternalServiceModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderExternalServiceModel|null
     */
    public function getData() : ?OrderExternalServiceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModel|null $data
     *
     * @return self
     */
    public function setData(?OrderExternalServiceModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}