<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModelCollection
{
    /**
     * A list of stock locations
     *
     * @var StockLocationModel[]|null
     */
    protected $data;
    /**
     * A list of stock locations
     *
     * @return StockLocationModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of stock locations
     *
     * @param StockLocationModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}