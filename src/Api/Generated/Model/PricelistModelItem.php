<?php

namespace Starweb\Api\Generated\Model;

class PricelistModelItem extends \ArrayObject
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
     * @var PricelistModel
     */
    protected $data;
    /**
     * 
     *
     * @return PricelistModel
     */
    public function getData() : PricelistModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PricelistModel $data
     *
     * @return self
     */
    public function setData(PricelistModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}