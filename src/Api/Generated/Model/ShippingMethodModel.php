<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModel extends \ArrayObject
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
     * The shipping methods Id
     *
     * @var int
     */
    protected $shippingMethodId;
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @var bool
     */
    protected $active;
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @var string
     */
    protected $validForCountries;
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @var string[]
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
     * @var bool
     */
    protected $isClickAndCollect;
    /**
     * 
     *
     * @var ShippingMethodLanguageModelCollection
     */
    protected $languages;
    /**
     * The shipping methods Id
     *
     * @return int
     */
    public function getShippingMethodId() : int
    {
        return $this->shippingMethodId;
    }
    /**
     * The shipping methods Id
     *
     * @param int $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(int $shippingMethodId) : self
    {
        $this->initialized['shippingMethodId'] = true;
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * If the shipping method is actively available on checkout or not
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string
     */
    public function getValidForCountries() : string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this shipping method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @param string $validForCountries
     *
     * @return self
     */
    public function setValidForCountries(string $validForCountries) : self
    {
        $this->initialized['validForCountries'] = true;
        $this->validForCountries = $validForCountries;
        return $this;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @return string[]
     */
    public function getValidCountriesSelected() : array
    {
        return $this->validCountriesSelected;
    }
    /**
     * The countries this method is valid for (if validForCountries is set to ”selected”)
     *
     * @param string[] $validCountriesSelected
     *
     * @return self
     */
    public function setValidCountriesSelected(array $validCountriesSelected) : self
    {
        $this->initialized['validCountriesSelected'] = true;
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
        $this->initialized['validForMinItemsSubtotal'] = true;
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
        $this->initialized['validForMaxItemsSubtotal'] = true;
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
        $this->initialized['validForMinWeight'] = true;
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
        $this->initialized['validForMaxWeight'] = true;
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
        $this->initialized['validForCustomerType'] = true;
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
        $this->initialized['freeShippingMinItemsSubtotal'] = true;
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
        $this->initialized['freeShippingMinWeight'] = true;
        $this->freeShippingMinWeight = $freeShippingMinWeight;
        return $this;
    }
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @return bool
     */
    public function getIsClickAndCollect() : bool
    {
        return $this->isClickAndCollect;
    }
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @param bool $isClickAndCollect
     *
     * @return self
     */
    public function setIsClickAndCollect(bool $isClickAndCollect) : self
    {
        $this->initialized['isClickAndCollect'] = true;
        $this->isClickAndCollect = $isClickAndCollect;
        return $this;
    }
    /**
     * 
     *
     * @return ShippingMethodLanguageModelCollection
     */
    public function getLanguages() : ShippingMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ShippingMethodLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(ShippingMethodLanguageModelCollection $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}