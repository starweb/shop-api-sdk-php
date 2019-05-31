<?php

namespace Starweb\Api\Generated\Model;

class VatRateModel
{
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
    protected $defaultVatRate;
    /**
     * The vat rates to use for this country for payment methods
     *
     * @var float
     */
    protected $fixedOrderPaymentVatRate;
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @var float
     */
    protected $fixedOrderShippingVatRate;
    /**
     * The vat rates to use for this country for discounts
     *
     * @var float
     */
    protected $fixedOrderDiscountVatRate;
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @return string
     */
    public function getCountryCode() : ?string
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
    public function setCountryCode(?string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The vat rates to use for this country
     *
     * @return float
     */
    public function getDefaultVatRate() : ?float
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
    public function setDefaultVatRate(?float $defaultVatRate) : self
    {
        $this->defaultVatRate = $defaultVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for payment methods
     *
     * @return float
     */
    public function getFixedOrderPaymentVatRate() : ?float
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
    public function setFixedOrderPaymentVatRate(?float $fixedOrderPaymentVatRate) : self
    {
        $this->fixedOrderPaymentVatRate = $fixedOrderPaymentVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @return float
     */
    public function getFixedOrderShippingVatRate() : ?float
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
    public function setFixedOrderShippingVatRate(?float $fixedOrderShippingVatRate) : self
    {
        $this->fixedOrderShippingVatRate = $fixedOrderShippingVatRate;
        return $this;
    }
    /**
     * The vat rates to use for this country for discounts
     *
     * @return float
     */
    public function getFixedOrderDiscountVatRate() : ?float
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
    public function setFixedOrderDiscountVatRate(?float $fixedOrderDiscountVatRate) : self
    {
        $this->fixedOrderDiscountVatRate = $fixedOrderDiscountVatRate;
        return $this;
    }
}