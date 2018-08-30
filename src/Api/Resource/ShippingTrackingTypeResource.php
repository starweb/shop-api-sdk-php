<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ShippingTrackingType\ShippingTrackingTypeCollection;
use Starweb\Api\Operation\ShippingTrackingType\ListShippingTrackingTypes;

class ShippingTrackingTypeResource extends Resource
{
    /**
     * @return ShippingTrackingTypeCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ShippingTrackingTypeCollection
    {
        $response = $this->performOperation(
            new ListShippingTrackingTypes($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ShippingTrackingTypeCollection::class);
    }
}
