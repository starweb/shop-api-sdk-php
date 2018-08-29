<?php

namespace Starweb\Api\Model\ProductUnit;

class ProductUnitItem
{
    /**
     * 
     *
     * @var ProductUnit
     */
    protected $data;
    /**
     * 
     *
     * @return ProductUnit
     */
    public function getData() : ?ProductUnit
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductUnitModel $data
     *
     * @return self
     */
    public function setData(?ProductUnitModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}