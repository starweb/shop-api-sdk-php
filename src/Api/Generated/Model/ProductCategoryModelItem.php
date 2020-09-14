<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryModelItem
{
    /**
     * 
     *
     * @var ProductCategoryModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryModel|null
     */
    public function getData() : ?ProductCategoryModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryModel|null $data
     *
     * @return self
     */
    public function setData(?ProductCategoryModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}