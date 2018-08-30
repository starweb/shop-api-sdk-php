<?php

namespace Starweb\Api\Model\ProductVariantAttributeValue;

class ProductVariantAttributeValueUpdatable
{
    /**
     * A collection of attribute value languages
     *
     * @var ProductVariantAttributeValueLanguage[]
     */
    protected $languages;
    /**
     * A collection of attribute value languages
     *
     * @return ProductVariantAttributeValueLanguage[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute value languages
     *
     * @param ProductVariantAttributeValueLanguage[]
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
