<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockModelCollection
{
    /**
     * A collection of product variant stocks
     *
     * @var ProductVariantStockResponseModel[]|null
     */
    protected $data;
    /**
     * A collection of product variant stocks
     *
     * @return ProductVariantStockResponseModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variant stocks
     *
     * @param ProductVariantStockResponseModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}