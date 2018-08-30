<?php

namespace Starweb\Api\Model\ProductStockStatus;

class ProductStockStatusCollection
{
    /**
     * A list of product stock statuses
     *
     * @var ProductStockStatus[]
     */
    protected $data;
    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatus[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatus[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
