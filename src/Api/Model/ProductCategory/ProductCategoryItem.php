<?php

namespace Starweb\Api\Model\ProductCategory;

class ProductCategoryItem
{
    /**
     * 
     *
     * @var ProductCategory
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategory
     */
    public function getData() : ProductCategory
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategory $data
     *
     * @return self
     */
    public function setData(ProductCategory $data) : self
    {
        $this->data = $data;
        return $this;
    }
}