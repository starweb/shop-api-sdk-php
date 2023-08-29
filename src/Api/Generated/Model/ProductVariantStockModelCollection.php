<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockModelCollection extends \ArrayObject
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
     * A collection of product variant stocks
     *
     * @var ProductVariantStockResponseModel[]
     */
    protected $data;
    /**
     * A collection of product variant stocks
     *
     * @return ProductVariantStockResponseModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product variant stocks
     *
     * @param ProductVariantStockResponseModel[] $data
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