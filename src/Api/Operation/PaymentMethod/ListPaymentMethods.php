<?php

namespace Starweb\Api\Operation\PaymentMethod;

use Starweb\Api\Operation\Operation;

class ListPaymentMethods extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/payment-methods';
    }
}
