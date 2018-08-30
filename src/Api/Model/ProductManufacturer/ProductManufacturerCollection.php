<?php

namespace Starweb\Api\Model\ProductManufacturer;

class ProductManufacturerCollection
{
    /**
     * A collection of product manufacturers
     *
     * @var ProductManufacturer[]
     */
    protected $data;
    /**
     * A collection of product manufacturers
     *
     * @return ProductManufacturer[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product manufacturers
     *
     * @param ProductManufacturer[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
