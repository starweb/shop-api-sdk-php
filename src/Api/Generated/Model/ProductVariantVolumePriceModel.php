<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantVolumePriceModel
{
    /**
     * The pricelist this price is for
     *
     * @var int|null
     */
    protected $pricelistId;
    /**
     * The external id of this pricelist
     *
     * @var string|null
     */
    protected $externalId = '';
    /**
     * The system name the externalId belongs to.
     *
     * @var string|null
     */
    protected $externalIdType;
    /**
     * The price excluding vat
     *
     * @var float|null
     */
    protected $priceExVat = 0;
    /**
     * The minimum quantity required for the price to apply
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The pricelist this price is for
     *
     * @return int|null
     */
    public function getPricelistId() : ?int
    {
        return $this->pricelistId;
    }
    /**
     * The pricelist this price is for
     *
     * @param int|null $pricelistId
     *
     * @return self
     */
    public function setPricelistId(?int $pricelistId) : self
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }
    /**
     * The external id of this pricelist
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The external id of this pricelist
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string|null
     */
    public function getExternalIdType() : ?string
    {
        return $this->externalIdType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string|null $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(?string $externalIdType) : self
    {
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * The price excluding vat
     *
     * @return float|null
     */
    public function getPriceExVat() : ?float
    {
        return $this->priceExVat;
    }
    /**
     * The price excluding vat
     *
     * @param float|null $priceExVat
     *
     * @return self
     */
    public function setPriceExVat(?float $priceExVat) : self
    {
        $this->priceExVat = $priceExVat;
        return $this;
    }
    /**
     * The minimum quantity required for the price to apply
     *
     * @return float|null
     */
    public function getQuantity() : ?float
    {
        return $this->quantity;
    }
    /**
     * The minimum quantity required for the price to apply
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
}