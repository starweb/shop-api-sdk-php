<?php

namespace Starweb\Api\Generated\Model;

class ProductBundleProductPriceModelItem
{
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
        $this->data = $data;
        return $this;
    }
}