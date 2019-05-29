<?php declare(strict_types=1);

namespace Starweb\Api\Model\Order;

class OrderItem
{
    /**
     * @var Order
     */
    protected $data;

    /**
     *
     *
     * @return Order
     */
    public function getData(): ?Order
    {
        return $this->data;
    }

    /**
     *
     *
     * @param Order $data
     *
     * @return self
     */
    public function setData(Order $data): self
    {
        $this->data = $data;

        return $this;
    }
}
