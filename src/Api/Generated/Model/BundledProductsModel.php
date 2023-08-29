<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModel extends \ArrayObject
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
     * Bundled product only valid for a single variant
     *
     * @var bool
     */
    protected $singleVariant;
    /**
     * The bundled products id
     *
     * @var int
     */
    protected $bundledProductId;
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @var string
     */
    protected $variantSku;
    /**
     * The quantity for this bundled product
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * The sort index of this bundled product.
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * A collection of bundled product prices
     *
     * @var ProductBundleProductPriceModel[]
     */
    protected $prices;
    /**
     * Bundled product only valid for a single variant
     *
     * @return bool
     */
    public function getSingleVariant() : bool
    {
        return $this->singleVariant;
    }
    /**
     * Bundled product only valid for a single variant
     *
     * @param bool $singleVariant
     *
     * @return self
     */
    public function setSingleVariant(bool $singleVariant) : self
    {
        $this->initialized['singleVariant'] = true;
        $this->singleVariant = $singleVariant;
        return $this;
    }
    /**
     * The bundled products id
     *
     * @return int
     */
    public function getBundledProductId() : int
    {
        return $this->bundledProductId;
    }
    /**
     * The bundled products id
     *
     * @param int $bundledProductId
     *
     * @return self
     */
    public function setBundledProductId(int $bundledProductId) : self
    {
        $this->initialized['bundledProductId'] = true;
        $this->bundledProductId = $bundledProductId;
        return $this;
    }
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @return string
     */
    public function getVariantSku() : string
    {
        return $this->variantSku;
    }
    /**
     * The sku of the variant the product is locked to in the variant
     *
     * @param string $variantSku
     *
     * @return self
     */
    public function setVariantSku(string $variantSku) : self
    {
        $this->initialized['variantSku'] = true;
        $this->variantSku = $variantSku;
        return $this;
    }
    /**
     * The quantity for this bundled product
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * The quantity for this bundled product
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The sort index of this bundled product.
     *
     * @return int
     */
    public function getSortIndex() : int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of this bundled product.
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(int $sortIndex) : self
    {
        $this->initialized['sortIndex'] = true;
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * A collection of bundled product prices
     *
     * @return ProductBundleProductPriceModel[]
     */
    public function getPrices() : array
    {
        return $this->prices;
    }
    /**
     * A collection of bundled product prices
     *
     * @param ProductBundleProductPriceModel[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}