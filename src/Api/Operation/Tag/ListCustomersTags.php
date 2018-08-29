<?php

namespace Starweb\Api\Operation\Tag;

use Starweb\Api\Operation\Operation;

class ListCustomersTags extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customer-tags';
    }
}
