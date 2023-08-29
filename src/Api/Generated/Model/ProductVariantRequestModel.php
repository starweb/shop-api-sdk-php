<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantRequestModel extends \ArrayObject
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
     * The product variants SKU (stock keeping unit)
     *
     * @var string|null
     */
    protected $sku;
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
     * Is this variant active? Only active variants are visible to customers
     *
     * @var bool|null
     */
    protected $isActive = true;
    /**
     * The sort index of this variant.
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @var int|null
     */
    protected $stockStatusId;
    /**
     * The current stock quantity for this variant
     *
     * @var int|null
     */
    protected $stockQuantity;
    /**
     * The variants weight in KG
     *
     * @var float|null
     */
    protected $weightInKg;
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @var string|null
     */
    protected $costPrice;
    /**
     * European article no
     *
     * @var string|null
     */
    protected $ean;
    /**
     * Manufacturer part no
     *
     * @var string|null
     */
    protected $mpn;
    /**
     * The ID of this variant main image. Available media files can be fetched using the /media-files endpoint
     *
     * @var int|null
     */
    protected $imageFileId;
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true.
     *
     * @var int[]|null
     */
    protected $attributeValueLinks;
    /**
     * An array of pricelists IDs that will use inheritance
     *
     * @var int[]|null
     */
    protected $volumePricingInheritancePricelistIds;
    /**
     * The product variants SKU (stock keeping unit)
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * The product variants SKU (stock keeping unit)
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
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
     * Is this variant active? Only active variants are visible to customers
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Is this variant active? Only active variants are visible to customers
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The sort index of this variant.
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of this variant.
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
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @return int|null
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The ID of the variants stock status. Available stock statuses can be fetched using the /product-stock-statuses endpoint
     *
     * @param int|null $stockStatusId
     *
     * @return self
     */
    public function setStockStatusId(?int $stockStatusId) : self
    {
        $this->initialized['stockStatusId'] = true;
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * The current stock quantity for this variant
     *
     * @return int|null
     */
    public function getStockQuantity() : ?int
    {
        return $this->stockQuantity;
    }
    /**
     * The current stock quantity for this variant
     *
     * @param int|null $stockQuantity
     *
     * @return self
     */
    public function setStockQuantity(?int $stockQuantity) : self
    {
        $this->initialized['stockQuantity'] = true;
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
    /**
     * The variants weight in KG
     *
     * @return float|null
     */
    public function getWeightInKg() : ?float
    {
        return $this->weightInKg;
    }
    /**
     * The variants weight in KG
     *
     * @param float|null $weightInKg
     *
     * @return self
     */
    public function setWeightInKg(?float $weightInKg) : self
    {
        $this->initialized['weightInKg'] = true;
        $this->weightInKg = $weightInKg;
        return $this;
    }
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @return string|null
     */
    public function getCostPrice() : ?string
    {
        return $this->costPrice;
    }
    /**
     * The cost for this variant. Used for statistic and never displayed to customers
     *
     * @param string|null $costPrice
     *
     * @return self
     */
    public function setCostPrice(?string $costPrice) : self
    {
        $this->initialized['costPrice'] = true;
        $this->costPrice = $costPrice;
        return $this;
    }
    /**
     * European article no
     *
     * @return string|null
     */
    public function getEan() : ?string
    {
        return $this->ean;
    }
    /**
     * European article no
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean) : self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * Manufacturer part no
     *
     * @return string|null
     */
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    /**
     * Manufacturer part no
     *
     * @param string|null $mpn
     *
     * @return self
     */
    public function setMpn(?string $mpn) : self
    {
        $this->initialized['mpn'] = true;
        $this->mpn = $mpn;
        return $this;
    }
    /**
     * The ID of this variant main image. Available media files can be fetched using the /media-files endpoint
     *
     * @return int|null
     */
    public function getImageFileId() : ?int
    {
        return $this->imageFileId;
    }
    /**
     * The ID of this variant main image. Available media files can be fetched using the /media-files endpoint
     *
     * @param int|null $imageFileId
     *
     * @return self
     */
    public function setImageFileId(?int $imageFileId) : self
    {
        $this->initialized['imageFileId'] = true;
        $this->imageFileId = $imageFileId;
        return $this;
    }
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true.
     *
     * @return int[]|null
     */
    public function getAttributeValueLinks() : ?array
    {
        return $this->attributeValueLinks;
    }
    /**
     * An array of attribute value IDs that this variant belongs to. This field is mandatory for products variants if the product´s hasSeveralVariants field is set to true.
     *
     * @param int[]|null $attributeValueLinks
     *
     * @return self
     */
    public function setAttributeValueLinks(?array $attributeValueLinks) : self
    {
        $this->initialized['attributeValueLinks'] = true;
        $this->attributeValueLinks = $attributeValueLinks;
        return $this;
    }
    /**
     * An array of pricelists IDs that will use inheritance
     *
     * @return int[]|null
     */
    public function getVolumePricingInheritancePricelistIds() : ?array
    {
        return $this->volumePricingInheritancePricelistIds;
    }
    /**
     * An array of pricelists IDs that will use inheritance
     *
     * @param int[]|null $volumePricingInheritancePricelistIds
     *
     * @return self
     */
    public function setVolumePricingInheritancePricelistIds(?array $volumePricingInheritancePricelistIds) : self
    {
        $this->initialized['volumePricingInheritancePricelistIds'] = true;
        $this->volumePricingInheritancePricelistIds = $volumePricingInheritancePricelistIds;
        return $this;
    }
}