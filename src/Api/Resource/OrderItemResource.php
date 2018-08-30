<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\OrderItem\OrderItemCollection;
use Starweb\Api\Model\OrderItem\OrderItem;
use Starweb\Api\Model\OrderItem\OrderItemItem;
use Starweb\Api\Operation\OrderItem\CreateOrderItem;
use Starweb\Api\Operation\OrderItem\DeleteOrderItem;
use Starweb\Api\Operation\OrderItem\ListOrderItems;
use Starweb\Api\Operation\OrderItem\ReplaceOrderItem;
use Starweb\Api\Operation\OrderItem\RetrieveOrderItem;
use Starweb\Api\Operation\OrderItem\UpdateOrderItem;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderItemResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'int');

        return $resolver;
    }

    /**
     * @return OrderItemCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): OrderItemCollection
    {
        $response = $this->performOperation(
            new ListOrderItems($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderItemCollection::class);
    }

    /**
     * @param OrderItem $item
     *
     * @return OrderItem
     *
     * @throws \Http\Client\Exception
     */
    public function create(OrderItem $item): OrderItem
    {
        $response = $this->performOperation(
            new CreateOrderItem(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(OrderItemItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderItemId
     *
     * @return OrderItem
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $orderItemId): OrderItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderItemId' => $orderItemId]);
        $response = $this->performOperation(
            new RetrieveOrderItem($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(OrderItemItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderItemId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $orderItemId): OrderItemItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderItemId' => $orderItemId]);
        $response = $this->performOperation(
            new DeleteOrderItem($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $orderItemId
     * @param OrderItem $item
     *
     * @return OrderItemItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $orderItemId, OrderItem $item): OrderItemItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderItemId' => $orderItemId]);
        $response = $this->performOperation(
            new ReplaceOrderItem(
                $this,
                $this->getSerializer()->normalize($item),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderItemItem::class);

        return $item->getData();
    }

    /**
     * @param int $orderItemId
     * @param OrderItem $item
     *
     * @return OrderItem
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $orderItemId, OrderItem $item): OrderItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderItemId' => $orderItemId]);
        $response = $this->performOperation(
            new UpdateOrderItem(
                $this,
                $this->getSerializer()->normalize($item),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderItemItem::class);

        return $item->getData();
    }
}
