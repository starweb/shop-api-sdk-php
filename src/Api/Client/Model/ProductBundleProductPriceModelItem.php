<?php

namespace Starweb\Api\Client\Model;

class ProductBundleProductPriceModelItem
{
    /**
     * 
     *
     * @var ProductBundleProductPriceModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductBundleProductPriceModel
     */
    public function getData() : ?ProductBundleProductPriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductBundleProductPriceModel $data
     *
     * @return self
     */
    public function setData(?ProductBundleProductPriceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}