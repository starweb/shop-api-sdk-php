<?php

namespace Starweb\Api\Operation\Pricelist;

use Starweb\Api\Operation\Operation;

class ListPricelists extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/pricelists';
    }
}
