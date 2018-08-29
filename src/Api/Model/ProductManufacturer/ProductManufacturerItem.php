<?php

namespace Starweb\Api\Model\ProductManufacturer;

class ProductManufacturerItem
{
    /**
     * 
     *
     * @var ProductManufacturer
     */
    protected $data;
    /**
     * 
     *
     * @return ProductManufacturer
     */
    public function getData() : ?ProductManufacturer
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductManufacturerModel $data
     *
     * @return self
     */
    public function setData(?ProductManufacturerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}