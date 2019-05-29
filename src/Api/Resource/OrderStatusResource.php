<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\OrderStatus\OrderStatusCollection;
use Starweb\Api\Model\OrderStatus\OrderStatus;
use Starweb\Api\Model\OrderStatus\OrderStatusItem;
use Starweb\Api\Operation\OrderStatus\CreateOrderStatus;
use Starweb\Api\Operation\OrderStatus\DeleteOrderStatus;
use Starweb\Api\Operation\OrderStatus\ListOrderStatuses;
use Starweb\Api\Operation\OrderStatus\ReplaceOrderStatus;
use Starweb\Api\Operation\OrderStatus\RetrieveOrderStatus;
use Starweb\Api\Operation\OrderStatus\UpdateOrderStatus;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderStatusResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'int');

        return $resolver;
    }

    /**
     * @return OrderStatusCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): OrderStatusCollection
    {
        $response = $this->performOperation(
            new ListOrderStatuses($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderStatusCollection::class);
    }

    /**
     * @param OrderStatus $status
     *
     * @return OrderStatus
     *
     * @throws \Http\Client\Exception
     */
    public function create(OrderStatus $status): OrderStatus
    {
        $response = $this->performOperation(
            new CreateOrderStatus(
                $this,
                $this->getSerializer()->normalize($status),
                $this->getPathParameters()
            )
        );
        $status = $response->getContentAsModel(OrderStatusItem::class);

        return $status->getData();
    }

    /**
     * @param int $orderStatusId
     *
     * @return OrderStatus
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $orderStatusId): OrderStatus
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderStatusId' => $orderStatusId]);
        $response = $this->performOperation(
            new RetrieveOrderStatus($this, [], $pathParameters)
        );
        $status = $response->getContentAsModel(OrderStatusItem::class);

        return $status->getData();
    }

    /**
     * @param int $orderStatusId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $orderStatusId): OrderStatusItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderStatusId' => $orderStatusId]);
        $response = $this->performOperation(
            new DeleteOrderStatus($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $orderStatusId
     * @param OrderStatus $status
     *
     * @return OrderStatusItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $orderStatusId, OrderStatus $status): OrderStatusItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderStatusId' => $orderStatusId]);
        $response = $this->performOperation(
            new ReplaceOrderStatus(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(OrderStatusItem::class);

        return $status->getData();
    }

    /**
     * @param int $orderStatusId
     * @param OrderStatus $status
     *
     * @return OrderStatus
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $orderStatusId, OrderStatus $status): OrderStatus
    {
        $pathParameters = array_merge($this->getPathParameters(), ['orderStatusId' => $orderStatusId]);
        $response = $this->performOperation(
            new UpdateOrderStatus(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(OrderStatusItem::class);

        return $status->getData();
    }
}
