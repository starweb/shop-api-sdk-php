<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModelCollection
{
    /**
     * A collection of product units
     *
     * @var ProductUnitModel[]|null
     */
    protected $data;
    /**
     * A collection of product units
     *
     * @return ProductUnitModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product units
     *
     * @param ProductUnitModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}