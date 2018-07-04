<?php

namespace Starweb\Api\Model\Shop;

use Starweb\Api\Model\ItemInterface;

class ShopItem implements ItemInterface
{
    /**
     * @var Shop
     */
    protected $data;

    /**
     * @return Shop
     */
    public function getData() : ?Shop
    {
        return $this->data;
    }

    /**
     * @param Shop $data
     *
     * @return self
     */
    public function setData(Shop $data) : self
    {
        $this->data = $data;

        return $this;
    }
}