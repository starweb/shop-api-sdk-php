<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModelCollection extends \ArrayObject
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
     * A collection of variant volume prices
     *
     * @var ProductVariantVolumePriceModel[]
     */
    protected $data;
    /**
     * A collection of variant volume prices
     *
     * @return ProductVariantVolumePriceModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of variant volume prices
     *
     * @param ProductVariantVolumePriceModel[] $data
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