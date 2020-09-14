<?php

namespace Starweb\Api\Generated\Model;

class ProductBundleProductPriceModelCollection
{
    /**
     * A collection of bundled product prices
     *
     * @var ProductBundleProductPriceModel[]|null
     */
    protected $data;
    /**
     * A collection of bundled product prices
     *
     * @return ProductBundleProductPriceModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of bundled product prices
     *
     * @param ProductBundleProductPriceModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}