<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModelItem
{
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
        $this->data = $data;
        return $this;
    }
}