<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModel extends \ArrayObject
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
     * The meta data type id
     *
     * @var int|null
     */
    protected $metaDataTypeId;
    /**
     * 
     *
     * @var ProductMetaDataTypeLanguageModelCollection|null
     */
    protected $languages;
    /**
     * The meta data type id
     *
     * @return int|null
     */
    public function getMetaDataTypeId() : ?int
    {
        return $this->metaDataTypeId;
    }
    /**
     * The meta data type id
     *
     * @param int|null $metaDataTypeId
     *
     * @return self
     */
    public function setMetaDataTypeId(?int $metaDataTypeId) : self
    {
        $this->initialized['metaDataTypeId'] = true;
        $this->metaDataTypeId = $metaDataTypeId;
        return $this;
    }
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