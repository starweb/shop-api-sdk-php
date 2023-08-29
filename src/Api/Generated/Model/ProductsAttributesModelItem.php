<?php

namespace Starweb\Api\Generated\Model;

class ProductsAttributesModelItem extends \ArrayObject
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
     * The id for this attribute
     *
     * @var int
     */
    protected $attributeId;
    /**
     * The id for this attribute
     *
     * @return int
     */
    public function getAttributeId() : int
    {
        return $this->attributeId;
    }
    /**
     * The id for this attribute
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(int $attributeId) : self
    {
        $this->initialized['attributeId'] = true;
        $this->attributeId = $attributeId;
        return $this;
    }
}