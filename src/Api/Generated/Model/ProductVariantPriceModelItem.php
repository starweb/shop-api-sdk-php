<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantPriceModelItem extends \ArrayObject
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
     * @var ProductVariantPriceModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantPriceModel
     */
    public function getData() : ProductVariantPriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantPriceModel $data
     *
     * @return self
     */
    public function setData(ProductVariantPriceModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}