<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelItem extends \ArrayObject
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
     * @var StockLocationModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return StockLocationModel|null
     */
    public function getData() : ?StockLocationModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param StockLocationModel|null $data
     *
     * @return self
     */
    public function setData(?StockLocationModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}