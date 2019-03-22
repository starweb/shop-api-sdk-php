<?php

namespace Starweb\Api\Client\Model;

class PricelistModelItem
{
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
    public function getData() : ?PricelistModel
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
    public function setData(?PricelistModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}