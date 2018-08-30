<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Order\Order;
use Starweb\Api\Model\Order\OrderCollection;
use Starweb\Api\Model\Order\OrderItem;
use Starweb\Api\Operation\Order\CreateOrder;
use Starweb\Api\Operation\Order\DeleteOrder;
use Starweb\Api\Operation\Order\ListOrders;
use Starweb\Api\Operation\Order\ReplaceOrder;
use Starweb\Api\Operation\Order\RetrieveOrder;
use Starweb\Api\Operation\OrderAddress\UpdateOrderAddress;

class OrderResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return OrderCollection
     */
    public function list(array $parameters = []): OrderCollection
    {
        $response = $this->performOperation(
            new ListOrders($this, $parameters, $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderCollection::class);
    }

    /**
     * @param Order $order
     *
     * @return Order
     *
     * @throws \Http\Client\Exception
     */
    public function create(Order $order): Order
    {
        $response = $this->performOperation(
            new CreateOrder(
                $this,
                $this->getSerializer()->normalize($order),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(OrderItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderId
     * @param array $parameters
     *
     * @return Order
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $orderId, $parameters = []): Order
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderId' => $orderId]);
        $response = $this->performOperation(
            new RetrieveOrder($this, $parameters, $pathParameters)
        );
        $item = $response->getContentAsModel(OrderItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $orderId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderId' => $orderId]);
        $response = $this->performOperation(
            new DeleteOrder($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $orderId
     *
     * @return Order
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $orderId, Order $order): Order
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderId' => $orderId]);
        $response = $this->performOperation(
            new ReplaceOrder(
                $this,
                $this->getSerializer()->normalize($order),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderId
     * @param Order $order
     *
     * @return Order
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $orderId, Order $order): Order
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderId' => $orderId]);
        $response = $this->performOperation(
            new UpdateOrderAddress(
                $this,
                $this->getSerializer()->normalize($order),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderItem::class);

        return $item->getData();
    }
}
