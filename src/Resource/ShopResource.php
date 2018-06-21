<?php

namespace Starweb\Resource;

use Starweb\Operation\Operation;

class ShopResource extends Resource
{
    public function getEndPoints(): array
    {
    }

    public function get(): string
    {
        $operation = new Operation(
            'shop',
            'GET'
        );

        $res = $this->client->executeEndpointOperation($operation);
        return $res->getBody();
    }
}
