<?php

namespace Starweb\Api\Generated\Model;

class ProductModelPatchable
{
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
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @var string|null
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
     * @var string|null
     */
    protected $visibility = 'hidden';
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @var int[]|null
     */
    protected $visibilityPricelistIds;
    /**
     * A valid URL to a web page with more information for this product
     *
     * @var string|null
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
     * @var string|null
     */
    protected $type;
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @var bool|null
     */
    protected $isBackInStockWatchable = true;
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @var bool|null
     */
    protected $bundleUseManualPrice;
    /**
     * Account number for managing accounting on product level
     *
     * @var int|null
     */
    protected $accounting;
    /**
     * A collection of media files
     *
     * @var ProductMediaFileLinkModel[]|null
     */
    protected $mediaFiles;
    /**
     * A collection of product languages
     *
     * @var ProductLanguageModel[]|null
     */
    protected $languages;
    /**
     * A collection of country specific vat rates
     *
     * @var ProductVatRateModel[]|null
     */
    protected $vatRates;
    /**
     * A collection of categories
     *
     * @var ProductCategoryLinkModel[]|null
     */
    protected $categories;
    /**
     * A collection of meta data
     *
     * @var ProductMetaDataModelUpdatable[]|null
     */
    protected $metaData;
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
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the product was created. The time should be formatted using ISO-8601
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
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
     * @return string|null
     */
    public function getVisibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * The visibility of this product. Supported values are: hidden, visible, pricelists
     *
     * @param string|null $visibility
     *
     * @return self
     */
    public function setVisibility(?string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @return int[]|null
     */
    public function getVisibilityPricelistIds() : ?array
    {
        return $this->visibilityPricelistIds;
    }
    /**
     * The ID´s of the pricelists that the product should be visible for. Is required for when ”visibility” is set to ”pricelists” but should never be populated otherwise
     *
     * @param int[]|null $visibilityPricelistIds
     *
     * @return self
     */
    public function setVisibilityPricelistIds(?array $visibilityPricelistIds) : self
    {
        $this->visibilityPricelistIds = $visibilityPricelistIds;
        return $this;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @return string|null
     */
    public function getMoreInfoUrl() : ?string
    {
        return $this->moreInfoUrl;
    }
    /**
     * A valid URL to a web page with more information for this product
     *
     * @param string|null $moreInfoUrl
     *
     * @return self
     */
    public function setMoreInfoUrl(?string $moreInfoUrl) : self
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
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of product. Either ”basic” or ”bundle”. Default is ”basic”
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @return bool|null
     */
    public function getIsBackInStockWatchable() : ?bool
    {
        return $this->isBackInStockWatchable;
    }
    /**
     * Should this product be watchable for customers when it is back in stock?
     *
     * @param bool|null $isBackInStockWatchable
     *
     * @return self
     */
    public function setIsBackInStockWatchable(?bool $isBackInStockWatchable) : self
    {
        $this->isBackInStockWatchable = $isBackInStockWatchable;
        return $this;
    }
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @return bool|null
     */
    public function getBundleUseManualPrice() : ?bool
    {
        return $this->bundleUseManualPrice;
    }
    /**
     * Should all bundled products have a manually entered price? Only applies if type is bundle
     *
     * @param bool|null $bundleUseManualPrice
     *
     * @return self
     */
    public function setBundleUseManualPrice(?bool $bundleUseManualPrice) : self
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
     * A collection of media files
     *
     * @return ProductMediaFileLinkModel[]|null
     */
    public function getMediaFiles() : ?array
    {
        return $this->mediaFiles;
    }
    /**
     * A collection of media files
     *
     * @param ProductMediaFileLinkModel[]|null $mediaFiles
     *
     * @return self
     */
    public function setMediaFiles(?array $mediaFiles) : self
    {
        $this->mediaFiles = $mediaFiles;
        return $this;
    }
    /**
     * A collection of product languages
     *
     * @return ProductLanguageModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * A collection of country specific vat rates
     *
     * @return ProductVatRateModel[]|null
     */
    public function getVatRates() : ?array
    {
        return $this->vatRates;
    }
    /**
     * A collection of country specific vat rates
     *
     * @param ProductVatRateModel[]|null $vatRates
     *
     * @return self
     */
    public function setVatRates(?array $vatRates) : self
    {
        $this->vatRates = $vatRates;
        return $this;
    }
    /**
     * A collection of categories
     *
     * @return ProductCategoryLinkModel[]|null
     */
    public function getCategories() : ?array
    {
        return $this->categories;
    }
    /**
     * A collection of categories
     *
     * @param ProductCategoryLinkModel[]|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * A collection of meta data
     *
     * @return ProductMetaDataModelUpdatable[]|null
     */
    public function getMetaData() : ?array
    {
        return $this->metaData;
    }
    /**
     * A collection of meta data
     *
     * @param ProductMetaDataModelUpdatable[]|null $metaData
     *
     * @return self
     */
    public function setMetaData(?array $metaData) : self
    {
        $this->metaData = $metaData;
        return $this;
    }
}