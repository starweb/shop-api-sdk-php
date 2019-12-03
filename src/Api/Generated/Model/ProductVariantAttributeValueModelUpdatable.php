<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelUpdatable
{
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
     * The suggested suffix for new Variants using this attribute value
     *
     * @var string
     */
    protected $skuSuffix;
    /**
     * The sort order for this attribute value
     *
     * @var int
     */
    protected $sortIndex = 0;
    /**
     * A collection of attribute value languages
     *
     * @var ProductVariantAttributeValueLanguageModel[]
     */
    protected $languages;
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
     * The suggested suffix for new Variants using this attribute value
     *
     * @return string
     */
    public function getSkuSuffix() : string
    {
        return $this->skuSuffix;
    }
    /**
     * The suggested suffix for new Variants using this attribute value
     *
     * @param string $skuSuffix
     *
     * @return self
     */
    public function setSkuSuffix(string $skuSuffix) : self
    {
        $this->skuSuffix = $skuSuffix;
        return $this;
    }
    /**
     * The sort order for this attribute value
     *
     * @return int
     */
    public function getSortIndex() : int
    {
        return $this->sortIndex;
    }
    /**
     * The sort order for this attribute value
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of attribute value languages
     *
     * @return ProductVariantAttributeValueLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * A collection of attribute value languages
     *
     * @param ProductVariantAttributeValueLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}