<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockModelItem extends \ArrayObject
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
     * @var ProductVariantStockResponseModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantStockResponseModel
     */
    public function getData() : ProductVariantStockResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantStockResponseModel $data
     *
     * @return self
     */
    public function setData(ProductVariantStockResponseModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}