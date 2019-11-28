<?php

namespace Starweb\Api\Generated\Model;

class OrderItemBundledModelItem
{
    /**
     * 
     *
     * @var OrderItemBundledModelItemBundledItems
     */
    protected $bundledItems;
    /**
     * 
     *
     * @return OrderItemBundledModelItemBundledItems
     */
    public function getBundledItems() : OrderItemBundledModelItemBundledItems
    {
        return $this->bundledItems;
    }
    /**
     * 
     *
     * @param OrderItemBundledModelItemBundledItems $bundledItems
     *
     * @return self
     */
    public function setBundledItems(OrderItemBundledModelItemBundledItems $bundledItems) : self
    {
        $this->bundledItems = $bundledItems;
        return $this;
    }
}