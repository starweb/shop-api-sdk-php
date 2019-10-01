<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelItem
{
    /**
     * 
     *
     * @var StockLocationModel
     */
    protected $data;
    /**
     * 
     *
     * @return StockLocationModel
     */
    public function getData() : StockLocationModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param StockLocationModel $data
     *
     * @return self
     */
    public function setData(StockLocationModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}