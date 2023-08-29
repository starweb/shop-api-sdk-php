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
     * @var PricelistModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return PricelistModel|null
     */
    public function getData() : ?PricelistModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PricelistModel|null $data
     *
     * @return self
     */
    public function setData(?PricelistModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}