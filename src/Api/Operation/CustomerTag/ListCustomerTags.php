<?php

namespace Starweb\Api\Operation\CustomerTag;

use Starweb\Api\Operation\Operation;

class ListCustomerTags extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/tags';
    }
}
