<?php

namespace Starweb\Api\Generated\Model;

class PricelistModelItem
{
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
        $this->data = $data;
        return $this;
    }
}