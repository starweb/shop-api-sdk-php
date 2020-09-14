<?php

namespace Starweb\Api\Generated\Model;

class VatRateModel
{
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The vat rates to use for this country
     *
     * @var float|null
     */
    protected $defaultVatRate = 0;
    /**
     * The vat rates to use for this country for payment methods
     *
     * @var float|null
     */
    protected $fixedOrderPaymentVatRate = 0;
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @var float|null
     */
    protected $fixedOrderShippingVatRate = 0;
    /**
     * The vat rates to use for this country for discounts
     *
     * @var float|null
     */
    protected $fixedOrderDiscountVatRate = 0;
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * The country code this vat rates should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @param string|null $countryCode
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
     * @return float|null
     */
    public function getDefaultVatRate() : ?float
    {
        return $this->defaultVatRate;
    }
    /**
     * The vat rates to use for this country
     *
     * @param float|null $defaultVatRate
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
     * @return float|null
     */
    public function getFixedOrderPaymentVatRate() : ?float
    {
        return $this->fixedOrderPaymentVatRate;
    }
    /**
     * The vat rates to use for this country for payment methods
     *
     * @param float|null $fixedOrderPaymentVatRate
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
     * @return float|null
     */
    public function getFixedOrderShippingVatRate() : ?float
    {
        return $this->fixedOrderShippingVatRate;
    }
    /**
     * The vat rates to use for this country for shipping methods
     *
     * @param float|null $fixedOrderShippingVatRate
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
     * @return float|null
     */
    public function getFixedOrderDiscountVatRate() : ?float
    {
        return $this->fixedOrderDiscountVatRate;
    }
    /**
     * The vat rates to use for this country for discounts
     *
     * @param float|null $fixedOrderDiscountVatRate
     *
     * @return self
     */
    public function setFixedOrderDiscountVatRate(?float $fixedOrderDiscountVatRate) : self
    {
        $this->fixedOrderDiscountVatRate = $fixedOrderDiscountVatRate;
        return $this;
    }
}