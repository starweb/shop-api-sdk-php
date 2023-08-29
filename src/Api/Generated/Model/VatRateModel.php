<?php

namespace Starweb\Api\Generated\Model;

class VatRateModel extends \ArrayObject
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
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The vat rates to use for this country
     *
     * @var float
     */
    protected $defaultVatRate = 0;
    /**
     * The vat rates to use for this country for payment methods
     *
     * @var float
     */
    protected $fixedOrderPaymentVatRate = 0;
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @var float
     */
    protected $fixedOrderShippingVatRate = 0;
    /**
     * The vat rates to use for this country for discounts
     *
     * @var float
     */
    protected $fixedOrderDiscountVatRate = 0;
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The vat rates to use for this country
     *
     * @return float
     */
    public function getDefaultVatRate() : float
    {
        return $this->defaultVatRate;
    }
    /**
     * The vat rates to use for this country
     *
     * @param float $defaultVatRate
     *
     * @return self
     */
    public function setDefaultVatRate(float $defaultVatRate) : self
    {
        $this->initialized['defaultVatRate'] = true;
        $this->defaultVatRate = $defaultVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for payment methods
     *
     * @return float
     */
    public function getFixedOrderPaymentVatRate() : float
    {
        return $this->fixedOrderPaymentVatRate;
    }
    /**
     * The vat rates to use for this country for payment methods
     *
     * @param float $fixedOrderPaymentVatRate
     *
     * @return self
     */
    public function setFixedOrderPaymentVatRate(float $fixedOrderPaymentVatRate) : self
    {
        $this->initialized['fixedOrderPaymentVatRate'] = true;
        $this->fixedOrderPaymentVatRate = $fixedOrderPaymentVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @return float
     */
    public function getFixedOrderShippingVatRate() : float
    {
        return $this->fixedOrderShippingVatRate;
    }
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @param float $fixedOrderShippingVatRate
     *
     * @return self
     */
    public function setFixedOrderShippingVatRate(float $fixedOrderShippingVatRate) : self
    {
        $this->initialized['fixedOrderShippingVatRate'] = true;
        $this->fixedOrderShippingVatRate = $fixedOrderShippingVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for discounts
     *
     * @return float
     */
    public function getFixedOrderDiscountVatRate() : float
    {
        return $this->fixedOrderDiscountVatRate;
    }
    /**
     * The vat rates to use for this country for discounts
     *
     * @param float $fixedOrderDiscountVatRate
     *
     * @return self
     */
    public function setFixedOrderDiscountVatRate(float $fixedOrderDiscountVatRate) : self
    {
        $this->initialized['fixedOrderDiscountVatRate'] = true;
        $this->fixedOrderDiscountVatRate = $fixedOrderDiscountVatRate;
        return $this;
    }
}