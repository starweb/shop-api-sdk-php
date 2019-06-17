<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelCollection
{
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
    public function getData() : ?array
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
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}