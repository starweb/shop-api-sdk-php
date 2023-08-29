<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModelCollection extends \ArrayObject
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
     * A collection of product units
     *
     * @var ProductUnitModel[]
     */
    protected $data;
    /**
     * A collection of product units
     *
     * @return ProductUnitModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product units
     *
     * @param ProductUnitModel[] $data
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