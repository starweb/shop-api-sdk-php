<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModelItem extends \ArrayObject
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
     * @var ProductVariantVolumePriceModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantVolumePriceModel
     */
    public function getData() : ProductVariantVolumePriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantVolumePriceModel $data
     *
     * @return self
     */
    public function setData(ProductVariantVolumePriceModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}