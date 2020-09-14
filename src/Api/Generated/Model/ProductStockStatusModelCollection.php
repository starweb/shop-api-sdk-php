<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelCollection
{
    /**
     * A list of product stock statuses
     *
     * @var ProductStockStatusResponseModel[]|null
     */
    protected $data;
    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatusResponseModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatusResponseModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}