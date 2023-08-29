<?php

namespace Starweb\Api\Generated\Model;

class OrderItemBundledModelItem extends \ArrayObject
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
        $this->initialized['bundledItems'] = true;
        $this->bundledItems = $bundledItems;
        return $this;
    }
}