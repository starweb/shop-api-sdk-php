<?php

namespace Starweb\Api\Client\Model;

class BundledProductsModelCollection
{
    /**
     * A collection of bundled products
     *
     * @var BundledProductsModel[]
     */
    protected $data;
    /**
     * A collection of bundled products
     *
     * @return BundledProductsModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of bundled products
     *
     * @param BundledProductsModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}