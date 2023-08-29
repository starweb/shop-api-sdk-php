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
     * @var int
     */
    protected $metaDataTypeId;
    /**
     * 
     *
     * @var ProductMetaDataTypeLanguageModelCollection
     */
    protected $languages;
    /**
     * The meta data type id
     *
     * @return int
     */
    public function getMetaDataTypeId() : int
    {
        return $this->metaDataTypeId;
    }
    /**
     * The meta data type id
     *
     * @param int $metaDataTypeId
     *
     * @return self
     */
    public function setMetaDataTypeId(int $metaDataTypeId) : self
    {
        $this->initialized['metaDataTypeId'] = true;
        $this->metaDataTypeId = $metaDataTypeId;
        return $this;
    }
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
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}