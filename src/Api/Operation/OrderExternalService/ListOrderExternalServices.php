<?php

namespace Starweb\Api\Operation\OrderExternalService;

use Starweb\Api\Operation\Operation;

class ListOrderExternalServices extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/external-services';
    }
}
