<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Address\Address;
use Starweb\Api\Model\OrderAddress\OrderAddressCollection;
use Starweb\Api\Model\OrderAddress\OrderAddress;
use Starweb\Api\Model\OrderAddress\OrderAddressItem;
use Starweb\Api\Operation\OrderAddress\DeleteOrderAddress;
use Starweb\Api\Operation\OrderAddress\ListOrderAddresses;
use Starweb\Api\Operation\OrderAddress\ReplaceOrderAddress;
use Starweb\Api\Operation\OrderAddress\RetrieveOrderAddress;
use Starweb\Api\Operation\OrderAddress\UpdateOrderAddress;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderAddressResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'int');

        return $resolver;
    }

    /**
     * @return OrderAddressCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): OrderAddressCollection
    {
        $response = $this->performOperation(
            new ListOrderAddresses($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderAddressCollection::class);
    }

    /**
     * @param string $addressType
     *
     * @return OrderAddress
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $addressType): Address
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new RetrieveOrderAddress($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(OrderAddressItem::class);

        return $item->getData();
    }

    /**
     * @param string $addressType
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $addressType): OrderAddressItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new DeleteOrderAddress($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param string $addressType
     * @param Address $address
     *
     * @return OrderAddressItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $addressType, Address $address): OrderAddressItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new ReplaceOrderAddress(
                $this,
                $this->getSerializer()->normalize($address),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderAddressItem::class);

        return $item->getData();
    }

    /**
     * @param string $addressType
     * @param Address $address
     *
     * @return Address
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $addressType, Address $address): Address
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new UpdateOrderAddress(
                $this,
                $this->getSerializer()->normalize($address),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(OrderAddressItem::class);

        return $item->getData();
    }
}
