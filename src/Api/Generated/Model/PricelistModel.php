<?php

namespace Starweb\Api\Generated\Model;

class PricelistModel extends \ArrayObject
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
     * The pricelist id
     *
     * @var int|null
     */
    protected $pricelistId;
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
     * The name of this pricelist
     *
     * @var string|null
     */
    protected $name;
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @var bool|null
     */
    protected $isMaster;
    /**
     * Shows if the pricelist is activated or not.
     *
     * @var bool|null
     */
    protected $isActive = false;
    /**
     * The region this pricelist is valid for
     *
     * @var string|null
     */
    protected $region;
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @var string[]|null
     */
    protected $countryCodes;
    /**
     * The currencyCode this pricelist is valid for
     *
     * @var string|null
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
     * @var bool|null
     */
    protected $isCustomerPricelist;
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @var bool|null
     */
    protected $isCountryPricelist;
    /**
     * The pricelist id
     *
     * @return int|null
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist id
     *
     * @param int|null $pricelistId
     *
     * @return self
     */
    public function setPricelistId(?int $pricelistId) : self
    {
        $this->initialized['pricelistId'] = true;
        $this->pricelistId = $pricelistId;
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
     * The name of this pricelist
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this pricelist
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @return bool|null
     */
    public function getIsMaster() : ?bool
    {
        return $this->isMaster;
    }
    /**
     * If this pricelist is the default ”master” pricelist or not. Only one pricelist can be the master pricelist
     *
     * @param bool|null $isMaster
     *
     * @return self
     */
    public function setIsMaster(?bool $isMaster) : self
    {
        $this->initialized['isMaster'] = true;
        $this->isMaster = $isMaster;
        return $this;
    }
    /**
     * Shows if the pricelist is activated or not.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Shows if the pricelist is activated or not.
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
     * The region this pricelist is valid for
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * The region this pricelist is valid for
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @return string[]|null
     */
    public function getCountryCodes() : ?array
    {
        return $this->countryCodes;
    }
    /**
     * The countryCodes this pricelist is valid for. These will be set only if the `region` property is set to the value `selected` for specific countries.
     *
     * @param string[]|null $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(?array $countryCodes) : self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The currencyCode this pricelist is valid for
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
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
        $this->initialized['parentPricelistId'] = true;
        $this->parentPricelistId = $parentPricelistId;
        return $this;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @return bool|null
     */
    public function getIsCustomerPricelist() : ?bool
    {
        return $this->isCustomerPricelist;
    }
    /**
     * Is this pricelist a ”customer” pricelist (for selected customer groups)
     *
     * @param bool|null $isCustomerPricelist
     *
     * @return self
     */
    public function setIsCustomerPricelist(?bool $isCustomerPricelist) : self
    {
        $this->initialized['isCustomerPricelist'] = true;
        $this->isCustomerPricelist = $isCustomerPricelist;
        return $this;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @return bool|null
     */
    public function getIsCountryPricelist() : ?bool
    {
        return $this->isCountryPricelist;
    }
    /**
     * Is this pricelist a ”country” pricelist (base pricelist for a certain country)
     *
     * @param bool|null $isCountryPricelist
     *
     * @return self
     */
    public function setIsCountryPricelist(?bool $isCountryPricelist) : self
    {
        $this->initialized['isCountryPricelist'] = true;
        $this->isCountryPricelist = $isCountryPricelist;
        return $this;
    }
}