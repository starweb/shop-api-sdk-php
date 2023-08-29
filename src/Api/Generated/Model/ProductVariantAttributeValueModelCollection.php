<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelCollection extends \ArrayObject
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
     * A collection of attribute values
     *
     * @var ProductVariantAttributeValueModel[]
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeValueModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeValueModel[] $data
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