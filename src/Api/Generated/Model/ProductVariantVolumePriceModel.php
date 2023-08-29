<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModel extends \ArrayObject
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
     * The price excluding vat
     *
     * @var float
     */
    protected $priceExVat = 0;
    /**
     * The minimum quantity required for the price to apply
     *
     * @var float
     */
    protected $quantity;
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
     * The price excluding vat
     *
     * @return float
     */
    public function getPriceExVat() : float
    {
        return $this->priceExVat;
    }
    /**
     * The price excluding vat
     *
     * @param float $priceExVat
     *
     * @return self
     */
    public function setPriceExVat(float $priceExVat) : self
    {
        $this->initialized['priceExVat'] = true;
        $this->priceExVat = $priceExVat;
        return $this;
    }
    /**
     * The minimum quantity required for the price to apply
     *
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->quantity;
    }
    /**
     * The minimum quantity required for the price to apply
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}