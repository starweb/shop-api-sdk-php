<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressCollection extends \ArrayObject
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
     * @var OrderAddressModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderAddressModel|null
     */
    public function getData() : ?OrderAddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderAddressModel|null $data
     *
     * @return self
     */
    public function setData(?OrderAddressModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}