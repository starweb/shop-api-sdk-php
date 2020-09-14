<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModel
{
    /**
     * The id for this attribute value
     *
     * @var int|null
     */
    protected $attributeValueId;
    /**
     * The external id of this pricelist
     *
     * @var string|null
     */
    protected $externalId = '';
    /**
     * The system name the externalId belongs to.
     *
     * @var string|null
     */
    protected $externalIdType;
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @var string|null
     */
    protected $skuSuffix;
    /**
     * The sort order for this attribute value
     *
     * @var int|null
     */
    protected $sortIndex = 0;
    /**
     * A collection of attribute value languages
     *
     * @var ProductVariantAttributeValueModelLanguages|null
     */
    protected $languages;
    /**
     * The id for this attribute value
     *
     * @return int|null
     */
    public function getAttributeValueId() : ?int
    {
        return $this->attributeValueId;
    }
    /**
     * The id for this attribute value
     *
     * @param int|null $attributeValueId
     *
     * @return self
     */
    public function setAttributeValueId(?int $attributeValueId) : self
    {
        $this->attributeValueId = $attributeValueId;
        return $this;
    }
    /**
     * The external id of this pricelist
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The external id of this pricelist
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string|null
     */
    public function getExternalIdType() : ?string
    {
        return $this->externalIdType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string|null $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(?string $externalIdType) : self
    {
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @return string|null
     */
    public function getSkuSuffix() : ?string
    {
        return $this->skuSuffix;
    }
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @param string|null $skuSuffix
     *
     * @return self
     */
    public function setSkuSuffix(?string $skuSuffix) : self
    {
        $this->skuSuffix = $skuSuffix;
        return $this;
    }
    /**
     * The sort order for this attribute value
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort order for this attribute value
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of attribute value languages
     *
     * @return ProductVariantAttributeValueModelLanguages|null
     */
    public function getLanguages() : ?ProductVariantAttributeValueModelLanguages
    {
        return $this->languages;
    }
    /**
     * A collection of attribute value languages
     *
     * @param ProductVariantAttributeValueModelLanguages|null $languages
     *
     * @return self
     */
    public function setLanguages(?ProductVariantAttributeValueModelLanguages $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}