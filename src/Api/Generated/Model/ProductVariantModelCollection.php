<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantModelCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantResponseModel[]
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantResponseModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantResponseModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}