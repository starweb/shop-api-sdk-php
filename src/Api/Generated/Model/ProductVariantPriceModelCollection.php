<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantPriceModelCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantPriceModel[]|null
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantPriceModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantPriceModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}