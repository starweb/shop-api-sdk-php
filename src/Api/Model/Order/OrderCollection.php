<?php declare(strict_types=1);

namespace Starweb\Api\Model\Order;

class OrderCollection
{
    /**
     * A list of orders
     *
     * @var Order[]
     */
    protected $data;
    /**
     *
     *
     * @var OrderCollectionMeta
     */
    protected $meta;

    /**
     * A list of orders
     *
     * @return Order[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of orders
     *
     * @param Order[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     *
     *
     * @return OrderCollectionMeta
     */
    public function getMeta(): ?OrderCollectionMeta
    {
        return $this->meta;
    }

    /**
     *
     *
     * @param OrderCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(OrderCollectionMeta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}
