<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodModel
{
    /**
     * The payment methods Id
     *
     * @var int|null
     */
    protected $paymentMethodId;
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @var string|null
     */
    protected $idCode;
    /**
     * If the payment method is actively available on checkout or not
     *
     * @var bool|null
     */
    protected $active;
    /**
     * Fee associated with this method
     *
     * @var float|null
     */
    protected $fee;
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @var string|null
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
     * @var bool|null
     */
    protected $isClickAndCollect;
    /**
     * 
     *
     * @var PaymentMethodLanguageModelCollection|null
     */
    protected $languages;
    /**
     * The payment methods Id
     *
     * @return int|null
     */
    public function getPaymentMethodId() : ?int
    {
        return $this->paymentMethodId;
    }
    /**
     * The payment methods Id
     *
     * @param int|null $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?int $paymentMethodId) : self
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @return string|null
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * The payment methods idCode. This can be used to identify a payment method of a standarized type
     *
     * @param string|null $idCode
     *
     * @return self
     */
    public function setIdCode(?string $idCode) : self
    {
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * If the payment method is actively available on checkout or not
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * If the payment method is actively available on checkout or not
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
     * Fee associated with this method
     *
     * @return float|null
     */
    public function getFee() : ?float
    {
        return $this->fee;
    }
    /**
     * Fee associated with this method
     *
     * @param float|null $fee
     *
     * @return self
     */
    public function setFee(?float $fee) : self
    {
        $this->fee = $fee;
        return $this;
    }
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
     *
     * @return string|null
     */
    public function getValidForCountries() : ?string
    {
        return $this->validForCountries;
    }
    /**
     * The restrictions to countries this payment method is valid for. Valid values are: all, EU, non-EU, selected, none
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
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @return string|null
     */
    public function getValidForShippingMethods() : ?string
    {
        return $this->validForShippingMethods;
    }
    /**
     * The shipping methods this is valid for. Valid values are: all, selected
     *
     * @param string|null $validForShippingMethods
     *
     * @return self
     */
    public function setValidForShippingMethods(?string $validForShippingMethods) : self
    {
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
        $this->validForCustomerType = $validForCustomerType;
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
     * 
     *
     * @return PaymentMethodLanguageModelCollection|null
     */
    public function getLanguages() : ?PaymentMethodLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param PaymentMethodLanguageModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?PaymentMethodLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}