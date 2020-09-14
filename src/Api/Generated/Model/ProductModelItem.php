<?php

namespace Starweb\Api\Generated\Model;

class ProductModelItem
{
    /**
     * 
     *
     * @var ProductModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductModel|null
     */
    public function getData() : ?ProductModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductModel|null $data
     *
     * @return self
     */
    public function setData(?ProductModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}