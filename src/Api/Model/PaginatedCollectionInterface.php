<?php

namespace Starweb\Api\Model;

use Starweb\Api\Model\Meta\Meta;

interface PaginatedCollectionInterface extends CollectionInterface
{
    /**
     * @return Meta
     */
    public function getMeta(): Meta;
}
