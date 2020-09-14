<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModel
{
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
        $this->languages = $languages;
        return $this;
    }
}