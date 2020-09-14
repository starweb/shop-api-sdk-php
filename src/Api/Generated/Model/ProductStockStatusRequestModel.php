<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusRequestModel
{
    /**
     * The stock status id
     *
     * @var int|null
     */
    protected $stockStatusId;
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @var string|null
     */
    protected $idCode;
    /**
     * Sort index for this status
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @var int|null
     */
    protected $stockoutNewStatusId;
    /**
     * Is the product buyable when this status is set?
     *
     * @var bool|null
     */
    protected $productBuyable = true;
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @var bool|null
     */
    protected $inStock = false;
    /**
     * 
     *
     * @var ProductStockStatusLanguageModel[]|null
     */
    protected $languages;
    /**
     * The stock status id
     *
     * @return int|null
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The stock status id
     *
     * @param int|null $stockStatusId
     *
     * @return self
     */
    public function setStockStatusId(?int $stockStatusId) : self
    {
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @return string|null
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * The idCode of the status. Only standard statuses has idCodes set. It is also not permitted to change names for standard statuses
     *
     * @param string|null $idCode
     *
     * @return self
     */
    public function setIdCode(?string $idCode) : self
    {
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * Sort index for this status
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index for this status
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @return int|null
     */
    public function getStockoutNewStatusId() : ?int
    {
        return $this->stockoutNewStatusId;
    }
    /**
     * This has to be set to another, existing stock status id, or null. If a product has its quantity changed to negative, the product will then change stock status to the one with this id
     *
     * @param int|null $stockoutNewStatusId
     *
     * @return self
     */
    public function setStockoutNewStatusId(?int $stockoutNewStatusId) : self
    {
        $this->stockoutNewStatusId = $stockoutNewStatusId;
        return $this;
    }
    /**
     * Is the product buyable when this status is set?
     *
     * @return bool|null
     */
    public function getProductBuyable() : ?bool
    {
        return $this->productBuyable;
    }
    /**
     * Is the product buyable when this status is set?
     *
     * @param bool|null $productBuyable
     *
     * @return self
     */
    public function setProductBuyable(?bool $productBuyable) : self
    {
        $this->productBuyable = $productBuyable;
        return $this;
    }
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @return bool|null
     */
    public function getInStock() : ?bool
    {
        return $this->inStock;
    }
    /**
     * Should the product be displayed as "in stock" when this status is set?
     *
     * @param bool|null $inStock
     *
     * @return self
     */
    public function setInStock(?bool $inStock) : self
    {
        $this->inStock = $inStock;
        return $this;
    }
    /**
     * 
     *
     * @return ProductStockStatusLanguageModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductStockStatusLanguageModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}