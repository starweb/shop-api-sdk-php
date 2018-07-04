<?php

namespace Starweb\Api\Model;

interface CollectionInterface
{
    /**
     * @return ModelInterface[]
     */
    public function getData(): array;

    /**
     * @param ModelInterface[] $data
     *
     * @return CollectionInterface
     */
    public function setData(array $data);
}
