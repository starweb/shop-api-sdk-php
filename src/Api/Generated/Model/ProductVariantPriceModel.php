<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantPriceModel
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
     * The special price excluding vat (a discounted price)
     *
     * @var float|null
     */
    protected $specialPriceExVat;
    /**
     * 
     *
     * @var ProductVariantVolumePriceModelCollection|null
     */
    protected $volumePrices;
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
        $this->specialPriceExVat = $specialPriceExVat;
        return $this;
    }
    /**
     * 
     *
     * @return ProductVariantVolumePriceModelCollection|null
     */
    public function getVolumePrices() : ?ProductVariantVolumePriceModelCollection
    {
        return $this->volumePrices;
    }
    /**
     * 
     *
     * @param ProductVariantVolumePriceModelCollection|null $volumePrices
     *
     * @return self
     */
    public function setVolumePrices(?ProductVariantVolumePriceModelCollection $volumePrices) : self
    {
        $this->volumePrices = $volumePrices;
        return $this;
    }
}