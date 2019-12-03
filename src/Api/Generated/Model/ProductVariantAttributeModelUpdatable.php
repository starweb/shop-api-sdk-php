<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelUpdatable
{
    /**
     * 
     *
     * @var int
     */
    protected $attributeId;
    /**
     * The external id of this pricelist
     *
     * @var string
     */
    protected $externalId = '';
    /**
     * The system name the externalId belongs to.
     *
     * @var string
     */
    protected $externalIdType;
    /**
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeLanguageModel[]
     */
    protected $languages;
    /**
     * 
     *
     * @return int
     */
    public function getAttributeId() : int
    {
        return $this->attributeId;
    }
    /**
     * 
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(int $attributeId) : self
    {
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * The external id of this pricelist
     *
     * @return string
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * The external id of this pricelist
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string
     */
    public function getExternalIdType() : string
    {
        return $this->externalIdType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(string $externalIdType) : self
    {
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}