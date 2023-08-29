<?php

namespace Starweb\Api\Generated\Model;

class ProductBundleProductPriceModelCollection extends \ArrayObject
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
     * A collection of bundled product prices
     *
     * @var ProductBundleProductPriceModel[]|null
     */
    protected $data;
    /**
     * A collection of bundled product prices
     *
     * @return ProductBundleProductPriceModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of bundled product prices
     *
     * @param ProductBundleProductPriceModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}