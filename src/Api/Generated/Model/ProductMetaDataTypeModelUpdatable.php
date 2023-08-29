<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelUpdatable extends \ArrayObject
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
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}