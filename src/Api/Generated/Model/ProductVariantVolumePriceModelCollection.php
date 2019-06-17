<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModelCollection
{
    /**
     * A collection of variant volume prices
     *
     * @var ProductVariantVolumePriceModel[]
     */
    protected $data;
    /**
     * A collection of variant volume prices
     *
     * @return ProductVariantVolumePriceModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of variant volume prices
     *
     * @param ProductVariantVolumePriceModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}