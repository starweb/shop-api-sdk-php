<?php

namespace Starweb\Api\Model\ProductVariantAttribute;

class ProductVariantAttributeUpdatable
{
    /**
     *
     *
     * @var int
     */
    protected $attributeId;
    /**
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeLanguage[]
     */
    protected $languages;
    /**
     *
     *
     * @return int
     */
    public function getAttributeId() : ?int
    {
        return $this->attributeId;
    }
    /**
     *
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
    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeLanguage[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeLanguage[]
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
