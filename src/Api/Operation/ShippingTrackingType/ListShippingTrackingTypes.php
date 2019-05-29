<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ShippingTrackingType;

use Starweb\Api\Operation\Operation;

class ListShippingTrackingTypes extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/shipping-tracking-types';
    }
}
