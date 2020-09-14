<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModelCollection
{
    /**
     * A collection of bundled products
     *
     * @var BundledProductsModel[]|null
     */
    protected $data;
    /**
     * A collection of bundled products
     *
     * @return BundledProductsModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of bundled products
     *
     * @param BundledProductsModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}