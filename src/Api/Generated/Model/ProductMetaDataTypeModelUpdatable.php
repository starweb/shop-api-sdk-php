<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelUpdatable
{
    /**
     * 
     *
     * @var ProductMetaDataTypeLanguageModelCollection|null
     */
    protected $languages;
    /**
     * 
     *
     * @return ProductMetaDataTypeLanguageModelCollection|null
     */
    public function getLanguages() : ?ProductMetaDataTypeLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductMetaDataTypeLanguageModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?ProductMetaDataTypeLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}