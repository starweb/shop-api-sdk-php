<?php

namespace Starweb\Api\Model\OrderComment;

use Starweb\Api\Model\CollectionInterface;

class OrderCommentCollection implements CollectionInterface
{
    /**
     * A list of order comments
     *
     * @var OrderComment[]
     */
    protected $data;

    /**
     * A list of order comments
     *
     * @return OrderComment[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of order comments
     *
     * @param OrderComment[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
