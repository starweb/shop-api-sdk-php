<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModel extends \ArrayObject
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
     * The payment methods Id
     *
     * @var int
     */
    protected $paymentMethodId;
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @var string
     */
    protected $idCode;
    /**
     * If the payment method is actively available on checkout or not
     *
     * @var bool
     */
    protected $active;
    /**
     * Fee associated with this method
     *
     * @var float
     */
    protected $fee;
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @var string
     */
    protected $validForShippingMethods;
    /**
     * The customer type this method is valid for. Valid values are: null (no restriction), person, company
     *
     * @var string|null
     */
    protected $validForCustomerType;
    /**
     * Tells whether this method is a "click and collect" or not
     *
     * @var bool
     */
    protected $isClickAndCollect;
    /**
     * 
     *
     * @var PaymentMethodLanguageModelCollection
     */
    protected $languages;
    /**
     * The payment methods Id
     *
     * @return int
     */
    public function getPaymentMethodId() : int
    {
        return $this->paymentMethodId;
    }
    /**
     * The payment methods Id
     *
     * @param int $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(int $paymentMethodId) : self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @return string
     */
    public function getIdCode() : string
    {
        return $this->idCode;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
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
     * If the payment method is actively available on checkout or not
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * If the payment method is actively available on checkout or not
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
     * Fee associated with this method
     *
     * @return float
     */
    public function getFee() : float
    {
        return $this->fee;
    }
    /**
     * Fee associated with this method
     *
     * @param float $fee
     *
     * @return self
     */
    public function setFee(float $fee) : self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string
     */
    public function getValidForCountries() : string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @return string
     */
    public function getValidForShippingMethods() : string
    {
        return $this->validForShippingMethods;
    }
    /**
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @param string $validForShippingMethods
     *
     * @return self
     */
    public function setValidForShippingMethods(string $validForShippingMethods) : self
    {
        $this->initialized['validForShippingMethods'] = true;
        $this->validForShippingMethods = $validForShippingMethods;
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
     * @return PaymentMethodLanguageModelCollection
     */
    public function getLanguages() : PaymentMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param PaymentMethodLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(PaymentMethodLanguageModelCollection $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}