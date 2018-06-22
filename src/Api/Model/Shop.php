<?php

namespace Starweb\Api\Model;

class Shop implements ModelInterface
{
    
    private $name;

    private $categoryId;
    private $hasChildren;
    private $idCode;
    private $defaultLangCode;
    private $activeLangCodes;
    private $baseCurrency;
    private $defaultCustomerCountryCode;
    private $generalDefaultVatRate;
    private $shopCompanyName;
    private $shopAddress;
    private $shopPostalCode;
    private $shopCity;
    private $shopOrgNo;
    private $shopPhoneNo;
    private $shopVatNo;
    private $shopCountryCode;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getHasChildren()
    {
        return $this->hasChildren;
    }

    /**
     * @param mixed $hasChildren
     */
    public function setHasChildren($hasChildren): void
    {
        $this->hasChildren = $hasChildren;
    }

    /**
     * @return mixed
     */
    public function getIdCode()
    {
        return $this->idCode;
    }

    /**
     * @param mixed $idCode
     */
    public function setIdCode($idCode): void
    {
        $this->idCode = $idCode;
    }

    /**
     * @return mixed
     */
    public function getDefaultLangCode()
    {
        return $this->defaultLangCode;
    }

    /**
     * @param mixed $defaultLangCode
     */
    public function setDefaultLangCode($defaultLangCode): void
    {
        $this->defaultLangCode = $defaultLangCode;
    }

    /**
     * @return mixed
     */
    public function getActiveLangCodes()
    {
        return $this->activeLangCodes;
    }

    /**
     * @param mixed $activeLangCodes
     */
    public function setActiveLangCodes($activeLangCodes): void
    {
        $this->activeLangCodes = $activeLangCodes;
    }

    /**
     * @return mixed
     */
    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

    /**
     * @param mixed $baseCurrency
     */
    public function setBaseCurrency($baseCurrency): void
    {
        $this->baseCurrency = $baseCurrency;
    }

    /**
     * @return mixed
     */
    public function getDefaultCustomerCountryCode()
    {
        return $this->defaultCustomerCountryCode;
    }

    /**
     * @param mixed $defaultCustomerCountryCode
     */
    public function setDefaultCustomerCountryCode($defaultCustomerCountryCode): void
    {
        $this->defaultCustomerCountryCode = $defaultCustomerCountryCode;
    }

    /**
     * @return mixed
     */
    public function getGeneralDefaultVatRate()
    {
        return $this->generalDefaultVatRate;
    }

    /**
     * @param mixed $generalDefaultVatRate
     */
    public function setGeneralDefaultVatRate($generalDefaultVatRate): void
    {
        $this->generalDefaultVatRate = $generalDefaultVatRate;
    }

    /**
     * @return mixed
     */
    public function getShopCompanyName()
    {
        return $this->shopCompanyName;
    }

    /**
     * @param mixed $shopCompanyName
     */
    public function setShopCompanyName($shopCompanyName): void
    {
        $this->shopCompanyName = $shopCompanyName;
    }

    /**
     * @return mixed
     */
    public function getShopAddress()
    {
        return $this->shopAddress;
    }

    /**
     * @param mixed $shopAddress
     */
    public function setShopAddress($shopAddress): void
    {
        $this->shopAddress = $shopAddress;
    }

    /**
     * @return mixed
     */
    public function getShopPostalCode()
    {
        return $this->shopPostalCode;
    }

    /**
     * @param mixed $shopPostalCode
     */
    public function setShopPostalCode($shopPostalCode): void
    {
        $this->shopPostalCode = $shopPostalCode;
    }

    /**
     * @return mixed
     */
    public function getShopCity()
    {
        return $this->shopCity;
    }

    /**
     * @param mixed $shopCity
     */
    public function setShopCity($shopCity): void
    {
        $this->shopCity = $shopCity;
    }

    /**
     * @return mixed
     */
    public function getShopOrgNo()
    {
        return $this->shopOrgNo;
    }

    /**
     * @param mixed $shopOrgNo
     */
    public function setShopOrgNo($shopOrgNo): void
    {
        $this->shopOrgNo = $shopOrgNo;
    }

    /**
     * @return mixed
     */
    public function getShopPhoneNo()
    {
        return $this->shopPhoneNo;
    }

    /**
     * @param mixed $shopPhoneNo
     */
    public function setShopPhoneNo($shopPhoneNo): void
    {
        $this->shopPhoneNo = $shopPhoneNo;
    }

    /**
     * @return mixed
     */
    public function getShopVatNo()
    {
        return $this->shopVatNo;
    }

    /**
     * @param mixed $shopVatNo
     */
    public function setShopVatNo($shopVatNo): void
    {
        $this->shopVatNo = $shopVatNo;
    }

    /**
     * @return mixed
     */
    public function getShopCountryCode()
    {
        return $this->shopCountryCode;
    }

    /**
     * @param mixed $shopCountryCode
     */
    public function setShopCountryCode($shopCountryCode): void
    {
        $this->shopCountryCode = $shopCountryCode;
    }
}
