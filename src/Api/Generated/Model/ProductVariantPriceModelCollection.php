<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantPriceModelCollection extends \ArrayObject
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
     * A collection of product variants
     *
     * @var ProductVariantPriceModel[]|null
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantPriceModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantPriceModel[]|null $data
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