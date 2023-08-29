<?php

namespace Starweb\Api\Generated\Model;

class OrderItemModelCollectionDataItem extends \ArrayObject
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
     * The id of the order item
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * The SKU of the order item
     *
     * @var string|null
     */
    protected $sku;
    /**
     * The description of the order item
     *
     * @var string|null
     */
    protected $description;
    /**
     * The quantity of the order item
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * The unit symbol of the order item
     *
     * @var string|null
     */
    protected $unitSymbol;
    /**
     * The price per unit excluding VAT
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @var float|null
     */
    protected $vatRate;
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @var float|null
     */
    protected $discount;
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @var string|null
     */
    protected $discountType;
    /**
     * The sort order of the order items
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * 
     *
     * @var OrderItemBundledModelItemBundledItems|null
     */
    protected $bundledItems;
    /**
     * The id of the order item
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * The id of the order item
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * The SKU of the order item
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * The SKU of the order item
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * The description of the order item
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the order item
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The quantity of the order item
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * The quantity of the order item
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
     * The unit symbol of the order item
     *
     * @return string|null
     */
    public function getUnitSymbol() : ?string
    {
        return $this->unitSymbol;
    }
    /**
     * The unit symbol of the order item
     *
     * @param string|null $unitSymbol
     *
     * @return self
     */
    public function setUnitSymbol(?string $unitSymbol) : self
    {
        $this->initialized['unitSymbol'] = true;
        $this->unitSymbol = $unitSymbol;
        return $this;
    }
    /**
     * The price per unit excluding VAT
     *
     * @return float|null
     */
    public function getUnitPrice() : ?float
    {
        return $this->unitPrice;
    }
    /**
     * The price per unit excluding VAT
     *
     * @param float|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice) : self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @return float|null
     */
    public function getVatRate() : ?float
    {
        return $this->vatRate;
    }
    /**
     * The items VAT rate in percent. 25.0 = 25% VAT
     *
     * @param float|null $vatRate
     *
     * @return self
     */
    public function setVatRate(?float $vatRate) : self
    {
        $this->initialized['vatRate'] = true;
        $this->vatRate = $vatRate;
        return $this;
    }
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @return float|null
     */
    public function getDiscount() : ?float
    {
        return $this->discount;
    }
    /**
     * The discount for the entire order row. Either as a percentage or an amount. If this is an amount and set to 20.0, the sum 20.0 will be subtracted from the order total no matter what the quantity is set to.
     *
     * @param float|null $discount
     *
     * @return self
     */
    public function setDiscount(?float $discount) : self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @return string|null
     */
    public function getDiscountType() : ?string
    {
        return $this->discountType;
    }
    /**
     * The type of discount. Either ”amount” or ”percent”. Default is ”percent”
     *
     * @param string|null $discountType
     *
     * @return self
     */
    public function setDiscountType(?string $discountType) : self
    {
        $this->initialized['discountType'] = true;
        $this->discountType = $discountType;
        return $this;
    }
    /**
     * The sort order of the order items
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort order of the order items
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->initialized['sortIndex'] = true;
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * 
     *
     * @return OrderItemBundledModelItemBundledItems|null
     */
    public function getBundledItems() : ?OrderItemBundledModelItemBundledItems
    {
        return $this->bundledItems;
    }
    /**
     * 
     *
     * @param OrderItemBundledModelItemBundledItems|null $bundledItems
     *
     * @return self
     */
    public function setBundledItems(?OrderItemBundledModelItemBundledItems $bundledItems) : self
    {
        $this->initialized['bundledItems'] = true;
        $this->bundledItems = $bundledItems;
        return $this;
    }
}