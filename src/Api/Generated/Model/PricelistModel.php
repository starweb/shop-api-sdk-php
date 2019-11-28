<?php

namespace Starweb\Api\Generated\Model;

class PricelistModel
{
    /**
     * The pricelist id
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The external id of this pricelist
     *
     * @var string
     */
    protected $externalId = '';
    /**
     * The name of this pricelist
     *
     * @var string
     */
    protected $name;
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @var bool
     */
    protected $isMaster;
    /**
     * Shows if the pricelist is activated or not.
     *
     * @var bool
     */
    protected $isActive = false;
    /**
     * The region this pricelist is valid for
     *
     * @var string
     */
    protected $region;
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @var string[]
     */
    protected $countryCodes;
    /**
     * The currencyCode this pricelist is valid for
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Does this pricelist has a parent price list. 
     *
     * @var int|null
     */
    protected $parentPricelistId;
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @var bool
     */
    protected $isCustomerPricelist;
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @var bool
     */
    protected $isCountryPricelist;
    /**
     * The pricelist id
     *
     * @return int
     */
    public function getPricelistId() : int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist id
     *
     * @param int $pricelistId
     *
     * @return self
     */
    public function setPricelistId(int $pricelistId) : self
    {
        $this->pricelistId = $pricelistId;
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
     * The name of this pricelist
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of this pricelist
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @return bool
     */
    public function getIsMaster() : bool
    {
        return $this->isMaster;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @param bool $isMaster
     *
     * @return self
     */
    public function setIsMaster(bool $isMaster) : self
    {
        $this->isMaster = $isMaster;
        return $this;
    }
    /**
     * Shows if the pricelist is activated or not.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Shows if the pricelist is activated or not.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The region this pricelist is valid for
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
     * The region this pricelist is valid for
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @return string[]
     */
    public function getCountryCodes() : array
    {
        return $this->countryCodes;
    }
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @param string[] $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(array $countryCodes) : self
    {
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Does this pricelist has a parent price list. 
     *
     * @return int|null
     */
    public function getParentPricelistId() : ?int
    {
        return $this->parentPricelistId;
    }
    /**
     * Does this pricelist has a parent price list. 
     *
     * @param int|null $parentPricelistId
     *
     * @return self
     */
    public function setParentPricelistId(?int $parentPricelistId) : self
    {
        $this->parentPricelistId = $parentPricelistId;
        return $this;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @return bool
     */
    public function getIsCustomerPricelist() : bool
    {
        return $this->isCustomerPricelist;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @param bool $isCustomerPricelist
     *
     * @return self
     */
    public function setIsCustomerPricelist(bool $isCustomerPricelist) : self
    {
        $this->isCustomerPricelist = $isCustomerPricelist;
        return $this;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @return bool
     */
    public function getIsCountryPricelist() : bool
    {
        return $this->isCountryPricelist;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @param bool $isCountryPricelist
     *
     * @return self
     */
    public function setIsCountryPricelist(bool $isCountryPricelist) : self
    {
        $this->isCountryPricelist = $isCountryPricelist;
        return $this;
    }
}