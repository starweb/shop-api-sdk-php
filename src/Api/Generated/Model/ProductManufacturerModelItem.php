<?php

namespace Starweb\Api\Generated\Model;

class ProductManufacturerModelItem
{
    /**
     * 
     *
     * @var ProductManufacturerModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductManufacturerModel|null
     */
    public function getData() : ?ProductManufacturerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductManufacturerModel|null $data
     *
     * @return self
     */
    public function setData(?ProductManufacturerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}