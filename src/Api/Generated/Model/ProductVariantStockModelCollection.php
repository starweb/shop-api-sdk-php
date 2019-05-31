<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockModelCollection
{
    /**
     * A collection of product variant stocks
     *
     * @var ProductVariantStockResponseModel[]
     */
    protected $data;
    /**
     * A collection of product variant stocks
     *
     * @return ProductVariantStockResponseModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variant stocks
     *
     * @param ProductVariantStockResponseModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}