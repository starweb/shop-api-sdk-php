<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModelItem
{
    /**
     * 
     *
     * @var ProductUnitModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductUnitModel|null
     */
    public function getData() : ?ProductUnitModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductUnitModel|null $data
     *
     * @return self
     */
    public function setData(?ProductUnitModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}