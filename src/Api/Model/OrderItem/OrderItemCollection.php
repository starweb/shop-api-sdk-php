<?php

namespace Starweb\Api\Model\OrderItem;

class OrderItemCollection
{
    /**
     * A list of order items
     *
     * @var OrderItem[]
     */
    protected $data;

    /**
     * A list of order items
     *
     * @return OrderItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of order items
     *
     * @param OrderItem[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
