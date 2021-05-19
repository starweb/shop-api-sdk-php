<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModel
{
    /**
     * The shipping methods Id
     *
     * @var int|null
     */
    protected $shippingMethodId;
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @var bool|null
     */
    protected $active;
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @var string|null
     */
    protected $validForCountries;
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @var string[]|null
     */
    protected $validCountriesSelected;
    /**
     * The min order sub total that this method is valid for
     *
     * @var float|null
     */
    protected $validForMinItemsSubtotal;
    /**
     * The max order sub total that this method is valid for
     *
     * @var float|null
     */
    protected $validForMaxItemsSubtotal;
    /**
     * The min order weight that this method is valid for
     *
     * @var float|null
     */
    protected $validForMinWeight;
    /**
     * The max order weight that this method is valid for.
     *
     * @var float|null
     */
    protected $validForMaxWeight;
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @var string|null
     */
    protected $validForCustomerType;
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @var float|null
     */
    protected $freeShippingMinItemsSubtotal;
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @var float|null
     */
    protected $freeShippingMinWeight;
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @var bool|null
     */
    protected $isClickAndCollect;
    /**
     * External id for systems like Specter, Fortnox etc
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * 
     *
     * @var ShippingMethodLanguageModelCollection|null
     */
    protected $languages;
    /**
     * The shipping methods Id
     *
     * @return int|null
     */
    public function getShippingMethodId() : ?int
    {
        return $this->shippingMethodId;
    }
    /**
     * The shipping methods Id
     *
     * @param int|null $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(?int $shippingMethodId) : self
    {
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string|null
     */
    public function getValidForCountries() : ?string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @param string|null $validForCountries
     *
     * @return self
     */
    public function setValidForCountries(?string $validForCountries) : self
    {
        $this->validForCountries = $validForCountries;
        return $this;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @return string[]|null
     */
    public function getValidCountriesSelected() : ?array
    {
        return $this->validCountriesSelected;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @param string[]|null $validCountriesSelected
     *
     * @return self
     */
    public function setValidCountriesSelected(?array $validCountriesSelected) : self
    {
        $this->validCountriesSelected = $validCountriesSelected;
        return $this;
    }
    /**
     * The min order sub total that this method is valid for
     *
     * @return float|null
     */
    public function getValidForMinItemsSubtotal() : ?float
    {
        return $this->validForMinItemsSubtotal;
    }
    /**
     * The min order sub total that this method is valid for
     *
     * @param float|null $validForMinItemsSubtotal
     *
     * @return self
     */
    public function setValidForMinItemsSubtotal(?float $validForMinItemsSubtotal) : self
    {
        $this->validForMinItemsSubtotal = $validForMinItemsSubtotal;
        return $this;
    }
    /**
     * The max order sub total that this method is valid for
     *
     * @return float|null
     */
    public function getValidForMaxItemsSubtotal() : ?float
    {
        return $this->validForMaxItemsSubtotal;
    }
    /**
     * The max order sub total that this method is valid for
     *
     * @param float|null $validForMaxItemsSubtotal
     *
     * @return self
     */
    public function setValidForMaxItemsSubtotal(?float $validForMaxItemsSubtotal) : self
    {
        $this->validForMaxItemsSubtotal = $validForMaxItemsSubtotal;
        return $this;
    }
    /**
     * The min order weight that this method is valid for
     *
     * @return float|null
     */
    public function getValidForMinWeight() : ?float
    {
        return $this->validForMinWeight;
    }
    /**
     * The min order weight that this method is valid for
     *
     * @param float|null $validForMinWeight
     *
     * @return self
     */
    public function setValidForMinWeight(?float $validForMinWeight) : self
    {
        $this->validForMinWeight = $validForMinWeight;
        return $this;
    }
    /**
     * The max order weight that this method is valid for.
     *
     * @return float|null
     */
    public function getValidForMaxWeight() : ?float
    {
        return $this->validForMaxWeight;
    }
    /**
     * The max order weight that this method is valid for.
     *
     * @param float|null $validForMaxWeight
     *
     * @return self
     */
    public function setValidForMaxWeight(?float $validForMaxWeight) : self
    {
        $this->validForMaxWeight = $validForMaxWeight;
        return $this;
    }
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @return string|null
     */
    public function getValidForCustomerType() : ?string
    {
        return $this->validForCustomerType;
    }
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @param string|null $validForCustomerType
     *
     * @return self
     */
    public function setValidForCustomerType(?string $validForCustomerType) : self
    {
        $this->validForCustomerType = $validForCustomerType;
        return $this;
    }
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @return float|null
     */
    public function getFreeShippingMinItemsSubtotal() : ?float
    {
        return $this->freeShippingMinItemsSubtotal;
    }
    /**
     * Offer free shipping with this method if the minimum order sub total amount is at least this value
     *
     * @param float|null $freeShippingMinItemsSubtotal
     *
     * @return self
     */
    public function setFreeShippingMinItemsSubtotal(?float $freeShippingMinItemsSubtotal) : self
    {
        $this->freeShippingMinItemsSubtotal = $freeShippingMinItemsSubtotal;
        return $this;
    }
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @return float|null
     */
    public function getFreeShippingMinWeight() : ?float
    {
        return $this->freeShippingMinWeight;
    }
    /**
     * Offer free shipping with this method if the minimum order total weight is at least this value
     *
     * @param float|null $freeShippingMinWeight
     *
     * @return self
     */
    public function setFreeShippingMinWeight(?float $freeShippingMinWeight) : self
    {
        $this->freeShippingMinWeight = $freeShippingMinWeight;
        return $this;
    }
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @return bool|null
     */
    public function getIsClickAndCollect() : ?bool
    {
        return $this->isClickAndCollect;
    }
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @param bool|null $isClickAndCollect
     *
     * @return self
     */
    public function setIsClickAndCollect(?bool $isClickAndCollect) : self
    {
        $this->isClickAndCollect = $isClickAndCollect;
        return $this;
    }
    /**
     * External id for systems like Specter, Fortnox etc
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * External id for systems like Specter, Fortnox etc
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
     * 
     *
     * @return ShippingMethodLanguageModelCollection|null
     */
    public function getLanguages() : ?ShippingMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ShippingMethodLanguageModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?ShippingMethodLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}