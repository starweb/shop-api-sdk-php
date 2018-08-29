<?php

namespace Starweb\Api\Operation\CustomerExternalService;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListCustomerExternalServices extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/external-services';
    }
}
