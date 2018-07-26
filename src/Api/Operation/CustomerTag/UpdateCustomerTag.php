<?php

namespace Starweb\Api\Operation\CustomerTag;

use Starweb\Api\Operation\Operation;

class UpdateCustomerTag extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/tags/{tagId}';
    }
}
