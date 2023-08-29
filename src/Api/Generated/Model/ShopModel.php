<?php

namespace Starweb\Api\Generated\Model;

class ShopModel extends \ArrayObject
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
     * The shop name
     *
     * @var string
     */
    protected $name;
    /**
     * A unique id code for this shop
     *
     * @var string
     */
    protected $idCode;
    /**
     * The current status of this shop. Possible values are: open, closed, inactive
     *
     * @var string
     */
    protected $status;
    /**
     * Shops default language code
     *
     * @var string
     */
    protected $defaultLangCode;
    /**
     * Active languages in shop
     *
     * @var string[]
     */
    protected $activeLangCodes;
    /**
     * The shops base currency. All currencies and related data can be fetched using the /currencies endpoint
     *
     * @var string
     */
    protected $baseCurrency;
    /**
     * The default customer country
     *
     * @var string
     */
    protected $defaultCustomerCountryCode;
    /**
     * The default vat rate for new products
     *
     * @var float
     */
    protected $generalDefaultVatRate;
    /**
     * The company running this web shop
     *
     * @var string
     */
    protected $shopCompanyName;
    /**
     * The address to the web shop
     *
     * @var string
     */
    protected $shopAddress;
    /**
     * The postal code to the web shop
     *
     * @var string
     */
    protected $shopPostalCode;
    /**
     * The city to the web shop
     *
     * @var string
     */
    protected $shopCity;
    /**
     * The business id of the company running the web shop
     *
     * @var string
     */
    protected $shopOrgNo;
    /**
     * The contact phone number to the web shop
     *
     * @var string
     */
    protected $shopPhoneNo;
    /**
     * The EU VAT number of the company running the web shop
     *
     * @var string
     */
    protected $shopVatNo;
    /**
     * The country the company behind the web shop resides in
     *
     * @var string
     */
    protected $shopCountryCode;
    /**
     * The shop name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The shop name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A unique id code for this shop
     *
     * @return string
     */
    public function getIdCode() : string
    {
        return $this->idCode;
    }
    /**
     * A unique id code for this shop
     *
     * @param string $idCode
     *
     * @return self
     */
    public function setIdCode(string $idCode) : self
    {
        $this->initialized['idCode'] = true;
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * The current status of this shop. Possible values are: open, closed, inactive
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The current status of this shop. Possible values are: open, closed, inactive
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Shops default language code
     *
     * @return string
     */
    public function getDefaultLangCode() : string
    {
        return $this->defaultLangCode;
    }
    /**
     * Shops default language code
     *
     * @param string $defaultLangCode
     *
     * @return self
     */
    public function setDefaultLangCode(string $defaultLangCode) : self
    {
        $this->initialized['defaultLangCode'] = true;
        $this->defaultLangCode = $defaultLangCode;
        return $this;
    }
    /**
     * Active languages in shop
     *
     * @return string[]
     */
    public function getActiveLangCodes() : array
    {
        return $this->activeLangCodes;
    }
    /**
     * Active languages in shop
     *
     * @param string[] $activeLangCodes
     *
     * @return self
     */
    public function setActiveLangCodes(array $activeLangCodes) : self
    {
        $this->initialized['activeLangCodes'] = true;
        $this->activeLangCodes = $activeLangCodes;
        return $this;
    }
    /**
     * The shops base currency. All currencies and related data can be fetched using the /currencies endpoint
     *
     * @return string
     */
    public function getBaseCurrency() : string
    {
        return $this->baseCurrency;
    }
    /**
     * The shops base currency. All currencies and related data can be fetched using the /currencies endpoint
     *
     * @param string $baseCurrency
     *
     * @return self
     */
    public function setBaseCurrency(string $baseCurrency) : self
    {
        $this->initialized['baseCurrency'] = true;
        $this->baseCurrency = $baseCurrency;
        return $this;
    }
    /**
     * The default customer country
     *
     * @return string
     */
    public function getDefaultCustomerCountryCode() : string
    {
        return $this->defaultCustomerCountryCode;
    }
    /**
     * The default customer country
     *
     * @param string $defaultCustomerCountryCode
     *
     * @return self
     */
    public function setDefaultCustomerCountryCode(string $defaultCustomerCountryCode) : self
    {
        $this->initialized['defaultCustomerCountryCode'] = true;
        $this->defaultCustomerCountryCode = $defaultCustomerCountryCode;
        return $this;
    }
    /**
     * The default vat rate for new products
     *
     * @return float
     */
    public function getGeneralDefaultVatRate() : float
    {
        return $this->generalDefaultVatRate;
    }
    /**
     * The default vat rate for new products
     *
     * @param float $generalDefaultVatRate
     *
     * @return self
     */
    public function setGeneralDefaultVatRate(float $generalDefaultVatRate) : self
    {
        $this->initialized['generalDefaultVatRate'] = true;
        $this->generalDefaultVatRate = $generalDefaultVatRate;
        return $this;
    }
    /**
     * The company running this web shop
     *
     * @return string
     */
    public function getShopCompanyName() : string
    {
        return $this->shopCompanyName;
    }
    /**
     * The company running this web shop
     *
     * @param string $shopCompanyName
     *
     * @return self
     */
    public function setShopCompanyName(string $shopCompanyName) : self
    {
        $this->initialized['shopCompanyName'] = true;
        $this->shopCompanyName = $shopCompanyName;
        return $this;
    }
    /**
     * The address to the web shop
     *
     * @return string
     */
    public function getShopAddress() : string
    {
        return $this->shopAddress;
    }
    /**
     * The address to the web shop
     *
     * @param string $shopAddress
     *
     * @return self
     */
    public function setShopAddress(string $shopAddress) : self
    {
        $this->initialized['shopAddress'] = true;
        $this->shopAddress = $shopAddress;
        return $this;
    }
    /**
     * The postal code to the web shop
     *
     * @return string
     */
    public function getShopPostalCode() : string
    {
        return $this->shopPostalCode;
    }
    /**
     * The postal code to the web shop
     *
     * @param string $shopPostalCode
     *
     * @return self
     */
    public function setShopPostalCode(string $shopPostalCode) : self
    {
        $this->initialized['shopPostalCode'] = true;
        $this->shopPostalCode = $shopPostalCode;
        return $this;
    }
    /**
     * The city to the web shop
     *
     * @return string
     */
    public function getShopCity() : string
    {
        return $this->shopCity;
    }
    /**
     * The city to the web shop
     *
     * @param string $shopCity
     *
     * @return self
     */
    public function setShopCity(string $shopCity) : self
    {
        $this->initialized['shopCity'] = true;
        $this->shopCity = $shopCity;
        return $this;
    }
    /**
     * The business id of the company running the web shop
     *
     * @return string
     */
    public function getShopOrgNo() : string
    {
        return $this->shopOrgNo;
    }
    /**
     * The business id of the company running the web shop
     *
     * @param string $shopOrgNo
     *
     * @return self
     */
    public function setShopOrgNo(string $shopOrgNo) : self
    {
        $this->initialized['shopOrgNo'] = true;
        $this->shopOrgNo = $shopOrgNo;
        return $this;
    }
    /**
     * The contact phone number to the web shop
     *
     * @return string
     */
    public function getShopPhoneNo() : string
    {
        return $this->shopPhoneNo;
    }
    /**
     * The contact phone number to the web shop
     *
     * @param string $shopPhoneNo
     *
     * @return self
     */
    public function setShopPhoneNo(string $shopPhoneNo) : self
    {
        $this->initialized['shopPhoneNo'] = true;
        $this->shopPhoneNo = $shopPhoneNo;
        return $this;
    }
    /**
     * The EU VAT number of the company running the web shop
     *
     * @return string
     */
    public function getShopVatNo() : string
    {
        return $this->shopVatNo;
    }
    /**
     * The EU VAT number of the company running the web shop
     *
     * @param string $shopVatNo
     *
     * @return self
     */
    public function setShopVatNo(string $shopVatNo) : self
    {
        $this->initialized['shopVatNo'] = true;
        $this->shopVatNo = $shopVatNo;
        return $this;
    }
    /**
     * The country the company behind the web shop resides in
     *
     * @return string
     */
    public function getShopCountryCode() : string
    {
        return $this->shopCountryCode;
    }
    /**
     * The country the company behind the web shop resides in
     *
     * @param string $shopCountryCode
     *
     * @return self
     */
    public function setShopCountryCode(string $shopCountryCode) : self
    {
        $this->initialized['shopCountryCode'] = true;
        $this->shopCountryCode = $shopCountryCode;
        return $this;
    }
}