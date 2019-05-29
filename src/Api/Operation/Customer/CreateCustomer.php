<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Customer;

use Starweb\Api\Operation\Operation;

class CreateCustomer extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/customers';
    }
}
