<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ShippingMethod\ShippingMethod;
use Starweb\Api\Model\ShippingMethod\ShippingMethodCollection;
use Starweb\Api\Model\ShippingMethod\ShippingMethodItem;
use Starweb\Api\Operation\ShippingMethod\ListShippingMethods;
use Starweb\Api\Operation\ShippingMethod\RetrieveShippingMethod;

class ShippingMethodResource extends Resource
{
    /**
     * @return ShippingMethodCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ShippingMethodCollection
    {
        $response = $this->performOperation(
            new ListShippingMethods($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ShippingMethodCollection::class);
    }

    /**
     * @param int $shippingMethodId
     *
     * @return ShippingMethod
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $shippingMethodId): ShippingMethod
    {
        $pathParameters = array_merge($this->getPathParameters(), ['shippingMethodId' => $shippingMethodId]);
        $response = $this->performOperation(
            new RetrieveShippingMethod($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ShippingMethodItem::class);

        return $item->getData();
    }
}
