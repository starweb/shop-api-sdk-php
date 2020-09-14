<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModelItem
{
    /**
     * 
     *
     * @var ProductVariantVolumePriceModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantVolumePriceModel|null
     */
    public function getData() : ?ProductVariantVolumePriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantVolumePriceModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantVolumePriceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}