<?php

namespace Starweb\Api\Generated\Model;

class ProductModel
{
    /**
     * 
     *
     * @var int
     */
    protected $productId;
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
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @var string|null
     */
    protected $defaultVatRate;
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @var string
     */
    protected $visibility = 'hidden';
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @var int[]
     */
    protected $visibilityPricelistIds;
    /**
     * A valid URL to a web page with more information for this product
     *
     * @var string
     */
    protected $moreInfoUrl;
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @var int|null
     */
    protected $manufacturerId;
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @var int|null
     */
    protected $unitId;
    /**
     * Sort index for this product in a list
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * The type of product. Either ”basic” or ”bundle”. Default is ”basic”
     *
     * @var string
     */
    protected $type;
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @var bool
     */
    protected $isBackInStockWatchable = true;
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @var bool
     */
    protected $bundleUseManualPrice;
    /**
     * Account number for managing accounting on product level
     *
     * @var int|null
     */
    protected $accounting;
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @var bool
     */
    protected $hasSeveralVariants;
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * 
     *
     * @var ProductVariantModelCollection
     */
    protected $variants;
    /**
     * 
     *
     * @var BundledProductsModelCollection
     */
    protected $bundledProducts;
    /**
     * 
     *
     * @var ProductMediaFileLinkModelCollection
     */
    protected $mediaFiles;
    /**
     * 
     *
     * @var ProductModelLanguages
     */
    protected $languages;
    /**
     * 
     *
     * @var ProductVatRateModelCollection
     */
    protected $vatRates;
    /**
     * 
     *
     * @var ProductCategoryLinkModelCollection
     */
    protected $categories;
    /**
     * 
     *
     * @var ProductUnitModelItem
     */
    protected $unit;
    /**
     * 
     *
     * @var ProductMetaDataModelCollection
     */
    protected $metaData;
    /**
     * 
     *
     * @return int
     */
    public function getProductId() : int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId) : self
    {
        $this->productId = $productId;
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
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @return string|null
     */
    public function getDefaultVatRate() : ?string
    {
        return $this->defaultVatRate;
    }
    /**
     * The default vat rate for this product. Will fall back to shop default if null. To fetch country specific vat rates, please use include=vatRates or use the /products/x/vat-rates endpoint.
     *
     * @param string|null $defaultVatRate
     *
     * @return self
     */
    public function setDefaultVatRate(?string $defaultVatRate) : self
    {
        $this->defaultVatRate = $defaultVatRate;
        return $this;
    }
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @return int[]
     */
    public function getVisibilityPricelistIds() : array
    {
        return $this->visibilityPricelistIds;
    }
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @param int[] $visibilityPricelistIds
     *
     * @return self
     */
    public function setVisibilityPricelistIds(array $visibilityPricelistIds) : self
    {
        $this->visibilityPricelistIds = $visibilityPricelistIds;
        return $this;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @return string
     */
    public function getMoreInfoUrl() : string
    {
        return $this->moreInfoUrl;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @param string $moreInfoUrl
     *
     * @return self
     */
    public function setMoreInfoUrl(string $moreInfoUrl) : self
    {
        $this->moreInfoUrl = $moreInfoUrl;
        return $this;
    }
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @return int|null
     */
    public function getManufacturerId() : ?int
    {
        return $this->manufacturerId;
    }
    /**
     * The id of the manufacturer to use for this product. Fetch and handle available manufacturers using the /product-manufacturers endpoint
     *
     * @param int|null $manufacturerId
     *
     * @return self
     */
    public function setManufacturerId(?int $manufacturerId) : self
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @return int|null
     */
    public function getUnitId() : ?int
    {
        return $this->unitId;
    }
    /**
     * The id of the unit to use for this product if not standard. Fetch and handle available units using the /product-units endpoint
     *
     * @param int|null $unitId
     *
     * @return self
     */
    public function setUnitId(?int $unitId) : self
    {
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * Sort index for this product in a list
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index for this product in a list
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
     * The type of product. Either ”basic” or ”bundle”. Default is ”basic”
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of product. Either ”basic” or ”bundle”. Default is ”basic”
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @return bool
     */
    public function getIsBackInStockWatchable() : bool
    {
        return $this->isBackInStockWatchable;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @param bool $isBackInStockWatchable
     *
     * @return self
     */
    public function setIsBackInStockWatchable(bool $isBackInStockWatchable) : self
    {
        $this->isBackInStockWatchable = $isBackInStockWatchable;
        return $this;
    }
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @return bool
     */
    public function getBundleUseManualPrice() : bool
    {
        return $this->bundleUseManualPrice;
    }
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @param bool $bundleUseManualPrice
     *
     * @return self
     */
    public function setBundleUseManualPrice(bool $bundleUseManualPrice) : self
    {
        $this->bundleUseManualPrice = $bundleUseManualPrice;
        return $this;
    }
    /**
     * Account number for managing accounting on product level
     *
     * @return int|null
     */
    public function getAccounting() : ?int
    {
        return $this->accounting;
    }
    /**
     * Account number for managing accounting on product level
     *
     * @param int|null $accounting
     *
     * @return self
     */
    public function setAccounting(?int $accounting) : self
    {
        $this->accounting = $accounting;
        return $this;
    }
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @return bool
     */
    public function getHasSeveralVariants() : bool
    {
        return $this->hasSeveralVariants;
    }
    /**
     * Indicates if the products has several variants or not. The remaining variants can be fetched using the /products/{product id}/variants endpoint
     *
     * @param bool $hasSeveralVariants
     *
     * @return self
     */
    public function setHasSeveralVariants(bool $hasSeveralVariants) : self
    {
        $this->hasSeveralVariants = $hasSeveralVariants;
        return $this;
    }
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getModifiedAt() : string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the product was modified. The time should be formatted using ISO-8601
     *
     * @param string $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(string $modifiedAt) : self
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * 
     *
     * @return ProductVariantModelCollection
     */
    public function getVariants() : ProductVariantModelCollection
    {
        return $this->variants;
    }
    /**
     * 
     *
     * @param ProductVariantModelCollection $variants
     *
     * @return self
     */
    public function setVariants(ProductVariantModelCollection $variants) : self
    {
        $this->variants = $variants;
        return $this;
    }
    /**
     * 
     *
     * @return BundledProductsModelCollection
     */
    public function getBundledProducts() : BundledProductsModelCollection
    {
        return $this->bundledProducts;
    }
    /**
     * 
     *
     * @param BundledProductsModelCollection $bundledProducts
     *
     * @return self
     */
    public function setBundledProducts(BundledProductsModelCollection $bundledProducts) : self
    {
        $this->bundledProducts = $bundledProducts;
        return $this;
    }
    /**
     * 
     *
     * @return ProductMediaFileLinkModelCollection
     */
    public function getMediaFiles() : ProductMediaFileLinkModelCollection
    {
        return $this->mediaFiles;
    }
    /**
     * 
     *
     * @param ProductMediaFileLinkModelCollection $mediaFiles
     *
     * @return self
     */
    public function setMediaFiles(ProductMediaFileLinkModelCollection $mediaFiles) : self
    {
        $this->mediaFiles = $mediaFiles;
        return $this;
    }
    /**
     * 
     *
     * @return ProductModelLanguages
     */
    public function getLanguages() : ProductModelLanguages
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductModelLanguages $languages
     *
     * @return self
     */
    public function setLanguages(ProductModelLanguages $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * 
     *
     * @return ProductVatRateModelCollection
     */
    public function getVatRates() : ProductVatRateModelCollection
    {
        return $this->vatRates;
    }
    /**
     * 
     *
     * @param ProductVatRateModelCollection $vatRates
     *
     * @return self
     */
    public function setVatRates(ProductVatRateModelCollection $vatRates) : self
    {
        $this->vatRates = $vatRates;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryLinkModelCollection
     */
    public function getCategories() : ProductCategoryLinkModelCollection
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModelCollection $categories
     *
     * @return self
     */
    public function setCategories(ProductCategoryLinkModelCollection $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * 
     *
     * @return ProductUnitModelItem
     */
    public function getUnit() : ProductUnitModelItem
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param ProductUnitModelItem $unit
     *
     * @return self
     */
    public function setUnit(ProductUnitModelItem $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * 
     *
     * @return ProductMetaDataModelCollection
     */
    public function getMetaData() : ProductMetaDataModelCollection
    {
        return $this->metaData;
    }
    /**
     * 
     *
     * @param ProductMetaDataModelCollection $metaData
     *
     * @return self
     */
    public function setMetaData(ProductMetaDataModelCollection $metaData) : self
    {
        $this->metaData = $metaData;
        return $this;
    }
}