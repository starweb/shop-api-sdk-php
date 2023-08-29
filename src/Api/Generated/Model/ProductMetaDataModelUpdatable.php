<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataModelUpdatable extends \ArrayObject
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
     * The ID of the meta data.
     *
     * @var int|null
     */
    protected $metaDataId;
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
     *
     * @var int|null
     */
    protected $metaDataTypeId;
    /**
     * The sort index of this meta data for this product
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * A collection of product meta data languages
     *
     * @var ProductMetaLanguageDataModel[]|null
     */
    protected $languages;
    /**
     * The ID of the meta data.
     *
     * @return int|null
     */
    public function getMetaDataId() : ?int
    {
        return $this->metaDataId;
    }
    /**
     * The ID of the meta data.
     *
     * @param int|null $metaDataId
     *
     * @return self
     */
    public function setMetaDataId(?int $metaDataId) : self
    {
        $this->initialized['metaDataId'] = true;
        $this->metaDataId = $metaDataId;
        return $this;
    }
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
     *
     * @return int|null
     */
    public function getMetaDataTypeId() : ?int
    {
        return $this->metaDataTypeId;
    }
    /**
     * The ID of the meta data type. Available meta data types can be fetched using the /product-meta-data-types endpoint
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
     * The sort index of this meta data for this product
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of this meta data for this product
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->initialized['sortIndex'] = true;
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of product meta data languages
     *
     * @return ProductMetaLanguageDataModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * A collection of product meta data languages
     *
     * @param ProductMetaLanguageDataModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}