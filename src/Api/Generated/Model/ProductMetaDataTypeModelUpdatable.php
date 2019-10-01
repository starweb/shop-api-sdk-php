<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelUpdatable
{
    /**
     * 
     *
     * @var ProductMetaDataTypeLanguageModelCollection
     */
    protected $languages;
    /**
     * 
     *
     * @return ProductMetaDataTypeLanguageModelCollection
     */
    public function getLanguages() : ProductMetaDataTypeLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductMetaDataTypeLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(ProductMetaDataTypeLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}