<?php declare(strict_types=1);

namespace Starweb\Api\Model;

interface CollectionInterface
{
    /**
     * @return ModelInterface[]
     */
    public function getData(): array;
}
