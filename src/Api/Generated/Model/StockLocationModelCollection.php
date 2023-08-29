<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelCollection extends \ArrayObject
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
     * A list of stock locations
     *
     * @var StockLocationModel[]
     */
    protected $data;
    /**
     * A list of stock locations
     *
     * @return StockLocationModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of stock locations
     *
     * @param StockLocationModel[] $data
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