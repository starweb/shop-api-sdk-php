<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Currency;

use Starweb\Api\Operation\Operation;

class ListCurrencies extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/currencies';
    }
}
