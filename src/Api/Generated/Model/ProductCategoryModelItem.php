<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryModelItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ProductCategoryModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryModel
     */
    public function getData() : ProductCategoryModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryModel $data
     *
     * @return self
     */
    public function setData(ProductCategoryModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}