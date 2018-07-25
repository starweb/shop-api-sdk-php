<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ModelInterface;
use Starweb\Api\Model\Shop\Shop;
use Starweb\Api\Model\Shop\ShopItem;
use Starweb\Api\Operation\Shop\RetrieveShop;

class ShopResource extends Resource
{
    /**
     * retrieves the shop
     *
     * @return Shop|ModelInterface
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(): Shop
    {
        $response = $this->performOperation(new RetrieveShop());
        $item = $response->getContentAsModel(ShopItem::class);

        return $item->getData();
    }
}
