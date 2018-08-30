<?php

namespace Starweb\Api\Model\ProductMetaDataType;

class ProductMetaDataType
{
    /**
     *
     *
     * @var ProductMetaDataTypeLanguageCollection
     */
    protected $languages;
    /**
     * The meta data type id
     *
     * @var int
     */
    protected $metaDataTypeId;
    /**
     *
     *
     * @return ProductMetaDataTypeLanguageCollection
     */
    public function getLanguages() : ?ProductMetaDataTypeLanguageCollection
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
    public function setLanguages(?ProductMetaDataTypeLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The meta data type id
     *
     * @return int
     */
    public function getMetaDataTypeId() : ?int
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
    public function setMetaDataTypeId(?int $metaDataTypeId) : self
    {
        $this->metaDataTypeId = $metaDataTypeId;
        return $this;
    }
}
