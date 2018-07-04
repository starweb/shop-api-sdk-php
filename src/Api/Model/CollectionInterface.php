<?php

namespace Starweb\Api\Model;

interface CollectionInterface
{
    /**
     * @return ModelInterface[]
     */
    public function getData(): array;
}
