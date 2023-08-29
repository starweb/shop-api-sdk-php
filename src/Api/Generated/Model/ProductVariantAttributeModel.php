<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModel extends \ArrayObject
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
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeModelLanguages
     */
    protected $languages;
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
    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeModelLanguages
     */
    public function getLanguages() : ProductVariantAttributeModelLanguages
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeModelLanguages $languages
     *
     * @return self
     */
    public function setLanguages(ProductVariantAttributeModelLanguages $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}