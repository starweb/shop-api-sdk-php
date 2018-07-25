<?php

namespace Starweb\Api\Operation\CustomerTag;

use Starweb\Api\Operation\NestedOperation;

class ListCustomerTags extends NestedOperation
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
