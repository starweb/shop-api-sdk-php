<?php

namespace Starweb\Api\Generated\Model;

class ProductBundleProductPriceModel extends \ArrayObject
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
     * The pricelist this price is for
     *
     * @var int
     */
    protected $pricelistId;
    /**
     * The special price excluding vat (a discounted price)
     *
     * @var float|null
     */
    protected $specialPriceExVat;
    /**
     * The pricelist this price is for
     *
     * @return int
     */
    public function getPricelistId() : int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist this price is for
     *
     * @param int $pricelistId
     *
     * @return self
     */
    public function setPricelistId(int $pricelistId) : self
    {
        $this->initialized['pricelistId'] = true;
        $this->pricelistId = $pricelistId;
        return $this;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @return float|null
     */
    public function getSpecialPriceExVat() : ?float
    {
        return $this->specialPriceExVat;
    }
    /**
     * The special price excluding vat (a discounted price)
     *
     * @param float|null $specialPriceExVat
     *
     * @return self
     */
    public function setSpecialPriceExVat(?float $specialPriceExVat) : self
    {
        $this->initialized['specialPriceExVat'] = true;
        $this->specialPriceExVat = $specialPriceExVat;
        return $this;
    }
}