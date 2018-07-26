<?php

namespace Starweb\Api\Operation\CustomerTag;

use Starweb\Api\Operation\Operation;

class CreateCustomerTag extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/tags';
    }
}
