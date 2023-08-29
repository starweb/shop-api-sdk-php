<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModel extends \ArrayObject
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
     * The id for this attribute
     *
     * @var int|null
     */
    protected $attributeId;
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
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeModelLanguages|null
     */
    protected $languages;
    /**
     * The id for this attribute
     *
     * @return int|null
     */
    public function getAttributeId() : ?int
    {
        return $this->attributeId;
    }
    /**
     * The id for this attribute
     *
     * @param int|null $attributeId
     *
     * @return self
     */
    public function setAttributeId(?int $attributeId) : self
    {
        $this->initialized['attributeId'] = true;
        $this->attributeId = $attributeId;
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
        $this->initialized['externalId'] = true;
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
        $this->initialized['externalIdType'] = true;
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeModelLanguages|null
     */
    public function getLanguages() : ?ProductVariantAttributeModelLanguages
    {
        return $this->languages;
    }
    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeModelLanguages|null $languages
     *
     * @return self
     */
    public function setLanguages(?ProductVariantAttributeModelLanguages $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}