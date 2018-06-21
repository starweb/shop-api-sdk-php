<?php

namespace Starweb\Resource;

use Starweb\Endpoint\EndpointInterface;

interface ResourceInterface
{
    public const SHOP_RESOURCE = 'Shop';

    public const AVAILABLE_RESOURCES = [
        self::SHOP_RESOURCE
    ];

    /**
     * @return EndpointInterface[]
     */
    public function getEndPoints(): array;
}
