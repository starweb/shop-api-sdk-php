<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Shop;
use Starweb\Api\Operation\Operation;

class ShopResource extends Resource
{
    public function loadOperations()
    {
        return [
            new Operation('get', '/shop', 'GET')
        ];
    }

    public function show(): Shop
    {
        return $this->get('/shop', [], [], Shop::class);
    }
}
