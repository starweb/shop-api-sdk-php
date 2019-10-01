<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelUpdatable
{
    /**
     * A collection of attribute value languages
     *
     * @var ProductVariantAttributeValueLanguageModel[]
     */
    protected $languages;
    /**
     * A collection of attribute value languages
     *
     * @return ProductVariantAttributeValueLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute value languages
     *
     * @param ProductVariantAttributeValueLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}