<?php

namespace Starweb\Api\Model;

class Collection
{
    /** @var ModelInterface */
    private $items;

    /**
     * @return ModelInterface
     */
    public function getItems(): ModelInterface
    {
        return $this->items;
    }

    /**
     * @param ModelInterface $items
     */
    public function setItems(ModelInterface $items): void
    {
        $this->items = $items;
    }
}
