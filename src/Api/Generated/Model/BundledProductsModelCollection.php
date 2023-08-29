<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getData() : array
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
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}