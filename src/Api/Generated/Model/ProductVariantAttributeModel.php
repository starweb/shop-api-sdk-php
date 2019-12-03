<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModel
{
    /**
     * The id for this attribute
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
     * @var ProductVariantAttributeModelLanguages
     */
    protected $languages;
    /**
     * The id for this attribute
     *
     * @return int
     */
    public function getAttributeId() : int
    {
        return $this->attributeId;
    }
    /**
     * The id for this attribute
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
     * @return ProductVariantAttributeModelLanguages
     */
    public function getLanguages() : ProductVariantAttributeModelLanguages
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeModelLanguages $languages
     *
     * @return self
     */
    public function setLanguages(ProductVariantAttributeModelLanguages $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}