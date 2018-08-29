<?php

namespace Starweb\Api\Model\Pricelist;

class PricelistItem
{
    /**
     * 
     *
     * @var Pricelist
     */
    protected $data;
    /**
     * 
     *
     * @return Pricelist
     */
    public function getData() : ?Pricelist
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