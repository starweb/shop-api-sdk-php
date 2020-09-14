<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelItem
{
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
        $this->data = $data;
        return $this;
    }
}