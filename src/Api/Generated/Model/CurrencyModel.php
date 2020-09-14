<?php

namespace Starweb\Api\Generated\Model;

class CurrencyModel
{
    /**
     * The currency code
     *
     * @var string|null
     */
    protected $code;
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @var float|null
     */
    protected $exchangeRate;
    /**
     * The number of decimals to show and use
     *
     * @var int|null
     */
    protected $precision;
    /**
     * The currency code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The currency code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @return float|null
     */
    public function getExchangeRate() : ?float
    {
        return $this->exchangeRate;
    }
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @param float|null $exchangeRate
     *
     * @return self
     */
    public function setExchangeRate(?float $exchangeRate) : self
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * The number of decimals to show and use
     *
     * @return int|null
     */
    public function getPrecision() : ?int
    {
        return $this->precision;
    }
    /**
     * The number of decimals to show and use
     *
     * @param int|null $precision
     *
     * @return self
     */
    public function setPrecision(?int $precision) : self
    {
        $this->precision = $precision;
        return $this;
    }
}