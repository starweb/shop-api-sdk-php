<?php

namespace Starweb\Api\Generated\Model;

class OrderItemBundledModelItem
{
    /**
     * 
     *
     * @var OrderItemBundledModelItemBundledItems|null
     */
    protected $bundledItems;
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
        $this->bundledItems = $bundledItems;
        return $this;
    }
}