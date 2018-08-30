<?php

namespace Starweb\Api\Model\ProductAttribute;

class ProductAttributeRequest
{
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
    public function getAttributeId() : ?int
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
        $this->attributeId = $attributeId;
        return $this;
    }
}
