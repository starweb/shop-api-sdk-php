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
     * @var ProductCategoryLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryLinkModel|null
     */
    public function getData() : ?ProductCategoryLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductCategoryLinkModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}