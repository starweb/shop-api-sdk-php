<?php

namespace Starweb\Api\Generated\Model;

class StockLocationModel
{
    /**
     * The stock location Id
     *
     * @var int|null
     */
    protected $stockLocationId;
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
     * The stock location`s visibility settings.
     *
     * @var string|null
     */
    protected $visibility;
    /**
     * Sort index. A stock location with a lower value is displayed higher up in lists
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * Whether or not the stock location is the main ecommerce stock location There can only be one ecommerce stock location for the shop, so if you set this flag for any of the stock location it will be removed automatically from any other stock location
     *
     * @var bool|null
     */
    protected $ecommerceStockLocation = false;
    /**
     * 
     *
     * @var StockLocationLanguagesModelCollection|null
     */
    protected $languages;
    /**
     * The stock location Id
     *
     * @return int|null
     */
    public function getStockLocationId() : ?int
    {
        return $this->stockLocationId;
    }
    /**
     * The stock location Id
     *
     * @param int|null $stockLocationId
     *
     * @return self
     */
    public function setStockLocationId(?int $stockLocationId) : self
    {
        $this->stockLocationId = $stockLocationId;
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
     * The stock location`s visibility settings.
     *
     * @return string|null
     */
    public function getVisibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * The stock location`s visibility settings.
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
     * Sort index. A stock location with a lower value is displayed higher up in lists
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index. A stock location with a lower value is displayed higher up in lists
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
     * Whether or not the stock location is the main ecommerce stock location There can only be one ecommerce stock location for the shop, so if you set this flag for any of the stock location it will be removed automatically from any other stock location
     *
     * @return bool|null
     */
    public function getEcommerceStockLocation() : ?bool
    {
        return $this->ecommerceStockLocation;
    }
    /**
     * Whether or not the stock location is the main ecommerce stock location There can only be one ecommerce stock location for the shop, so if you set this flag for any of the stock location it will be removed automatically from any other stock location
     *
     * @param bool|null $ecommerceStockLocation
     *
     * @return self
     */
    public function setEcommerceStockLocation(?bool $ecommerceStockLocation) : self
    {
        $this->ecommerceStockLocation = $ecommerceStockLocation;
        return $this;
    }
    /**
     * 
     *
     * @return StockLocationLanguagesModelCollection|null
     */
    public function getLanguages() : ?StockLocationLanguagesModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param StockLocationLanguagesModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?StockLocationLanguagesModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}