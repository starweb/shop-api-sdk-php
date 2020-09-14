<?php

namespace Starweb\Api\Generated\Model;

class ProductVatRateModel
{
    /**
     * The country code this vat rate should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The vat rate to use for this country and product
     *
     * @var float|null
     */
    protected $vatRate = 0;
    /**
     * The country code this vat rate should be valid for. The country code should be set using ISO 3166-1 alpha-2
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * The country code this vat rate should be valid for. The country code should be set using ISO 3166-1 alpha-2
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
     * The vat rate to use for this country and product
     *
     * @return float|null
     */
    public function getVatRate() : ?float
    {
        return $this->vatRate;
    }
    /**
     * The vat rate to use for this country and product
     *
     * @param float|null $vatRate
     *
     * @return self
     */
    public function setVatRate(?float $vatRate) : self
    {
        $this->vatRate = $vatRate;
        return $this;
    }
}