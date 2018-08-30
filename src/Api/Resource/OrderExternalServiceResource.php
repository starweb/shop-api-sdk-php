<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\OrderExternalService\OrderExternalServiceCollection;
use Starweb\Api\Model\OrderExternalService\OrderExternalService;
use Starweb\Api\Model\OrderExternalService\OrderExternalServiceItem;
use Starweb\Api\Operation\OrderExternalService\CreateOrderExternalService;
use Starweb\Api\Operation\OrderExternalService\DeleteOrderExternalService;
use Starweb\Api\Operation\OrderExternalService\ListOrderExternalServices;
use Starweb\Api\Operation\OrderExternalService\ReplaceOrderExternalService;
use Starweb\Api\Operation\OrderExternalService\RetrieveOrderExternalService;
use Starweb\Api\Operation\OrderExternalService\UpdateOrderExternalService;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderExternalServiceResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'int');

        return $resolver;
    }

    /**
     * @return OrderExternalServiceCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): OrderExternalServiceCollection
    {
        $response = $this->performOperation(
            new ListOrderExternalServices($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderExternalServiceCollection::class);
    }

    /**
     * @param OrderExternalService $externalService
     *
     * @return OrderExternalService
     *
     * @throws \Http\Client\Exception
     */
    public function create(OrderExternalService $externalService): OrderExternalService
    {
        $response = $this->performOperation(
            new CreateOrderExternalService(
                $this,
                $this->getSerializer()->normalize($externalService),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(OrderExternalServiceItem::class);

        return $item->getData();
    }

    /**
     * @param string $serviceName
     *
     * @return OrderExternalService
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $serviceName): OrderExternalService
    {
        $pathParameters = array_merge($this->getPathParameters(), ['serviceName' => $serviceName]);
        $response = $this->performOperation(
            new RetrieveOrderExternalService($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(OrderExternalServiceItem::class);

        return $item->getData();
    }

    /**
     * @param string $serviceName
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $serviceName): OrderExternalServiceItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['serviceName' => $serviceName]);
        $response = $this->performOperation(
            new DeleteOrderExternalService($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param string $serviceName
     * @param OrderExternalService $externalService
     *
     * @return OrderExternalServiceItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $serviceName, OrderExternalService $externalService): OrderExternalServiceItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['serviceName' => $serviceName]);
        $response = $this->performOperation(
            new ReplaceOrderExternalService(
                $this,
                $this->getSerializer()->normalize($externalService),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderExternalServiceItem::class);

        return $item->getData();
    }

    /**
     * @param string $serviceName
     * @param OrderExternalService $externalService
     *
     * @return OrderExternalService
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $serviceName, OrderExternalService $externalService): OrderExternalService
    {
        $pathParameters = array_merge($this->getPathParameters(), ['serviceName' => $serviceName]);
        $response = $this->performOperation(
            new UpdateOrderExternalService(
                $this,
                $this->getSerializer()->normalize($externalService),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderExternalServiceItem::class);

        return $item->getData();
    }
}
