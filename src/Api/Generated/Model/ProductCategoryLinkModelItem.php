<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLinkModelItem extends \ArrayObject
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
     * @var ProductCategoryLinkModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryLinkModel
     */
    public function getData() : ProductCategoryLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModel $data
     *
     * @return self
     */
    public function setData(ProductCategoryLinkModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}