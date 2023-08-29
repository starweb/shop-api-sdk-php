<?php

namespace Starweb\Api\Generated\Model;

class ProductBundleProductPriceModelItem extends \ArrayObject
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
     * @var ProductBundleProductPriceModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductBundleProductPriceModel|null
     */
    public function getData() : ?ProductBundleProductPriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductBundleProductPriceModel|null $data
     *
     * @return self
     */
    public function setData(?ProductBundleProductPriceModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}