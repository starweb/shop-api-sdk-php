<?php

namespace Starweb\Api\Model\Product;

class ProductItem
{
    /**
     *
     *
     * @var Product
     */
    protected $data;
    /**
     *
     *
     * @return Product
     */
    public function getData() : ?Product
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductModel $data
     *
     * @return self
     */
    public function setData(ProductModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
