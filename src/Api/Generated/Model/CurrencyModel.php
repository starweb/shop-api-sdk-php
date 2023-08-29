<?php

namespace Starweb\Api\Generated\Model;

class CurrencyModel extends \ArrayObject
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
     * The currency code
     *
     * @var string
     */
    protected $code;
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @var float
     */
    protected $exchangeRate;
    /**
     * The number of decimals to show and use
     *
     * @var int
     */
    protected $precision;
    /**
     * The currency code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The currency code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @return float
     */
    public function getExchangeRate() : float
    {
        return $this->exchangeRate;
    }
    /**
     * The exchange rate against the shops default currency. Used in reports, etc. The default currency can be fetched from /shop
     *
     * @param float $exchangeRate
     *
     * @return self
     */
    public function setExchangeRate(float $exchangeRate) : self
    {
        $this->initialized['exchangeRate'] = true;
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * The number of decimals to show and use
     *
     * @return int
     */
    public function getPrecision() : int
    {
        return $this->precision;
    }
    /**
     * The number of decimals to show and use
     *
     * @param int $precision
     *
     * @return self
     */
    public function setPrecision(int $precision) : self
    {
        $this->initialized['precision'] = true;
        $this->precision = $precision;
        return $this;
    }
}