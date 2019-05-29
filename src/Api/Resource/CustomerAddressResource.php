<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Address\Address;
use Starweb\Api\Model\CustomerAddress\CustomerAddressCollection;
use Starweb\Api\Model\CustomerAddress\CustomerAddressItem;
use Starweb\Api\Operation\CustomerAddress\DeleteCustomerAddress;
use Starweb\Api\Operation\CustomerAddress\ListCustomerAddresses;
use Starweb\Api\Operation\CustomerAddress\ReplaceCustomerAddress;
use Starweb\Api\Operation\CustomerAddress\RetrieveCustomerAddress;
use Starweb\Api\Operation\CustomerAddress\UpdateCustomerAddress;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerAddressResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('customerId');
        $resolver->setAllowedTypes('customerId', 'int');

        return $resolver;
    }

    /**
     * @return CustomerAddressCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): CustomerAddressCollection
    {
        $response = $this->performOperation(
            new ListCustomerAddresses($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(CustomerAddressCollection::class);
    }

    /**
     * @param string $addressType
     *
     * @return CustomerAddressItem
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $addressType): CustomerAddressItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new RetrieveCustomerAddress($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(CustomerAddressItem::class);

        return $item->getData();
    }

    /**
     * @param string $addressType
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $addressType): CustomerAddressItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new DeleteCustomerAddress($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param string $addressType
     * @param Address $address
     *
     * @return CustomerAddressItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $addressType, Address $address): CustomerAddressItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['addressType' => $addressType]);
        $response = $this->performOperation(
            new ReplaceCustomerAddress(
                $this,
                $this->getSerializer()->normalize($address),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(CustomerAddressItem::class);

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
            new UpdateCustomerAddress(
                $this,
                $this->getSerializer()->normalize($address),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(CustomerAddressItem::class);

        return $item->getData();
    }
}
