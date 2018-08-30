<?php

namespace Starweb\Api\Model\ProductUnit;

class ProductUnitItem
{
    /**
     * @var ProductUnit
     */
    protected $data;

    /**
     * @return ProductUnit
     */
    public function getData(): ?ProductUnit
    {
        return $this->data;
    }

    /**
     * @param ProductUnit $data
     *
     * @return self
     */
    public function setData(ProductUnit $data): self
    {
        $this->data = $data;

        return $this;
    }
}
