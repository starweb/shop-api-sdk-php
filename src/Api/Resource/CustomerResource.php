<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Customer\Customer;
use Starweb\Api\Model\Customer\CustomerCollection;
use Starweb\Api\Model\Customer\CustomerItem;
use Starweb\Api\Operation\Customer\CreateCustomer;
use Starweb\Api\Operation\Customer\DeleteCustomer;
use Starweb\Api\Operation\Customer\ListCustomers;
use Starweb\Api\Operation\Customer\ReplaceCustomer;
use Starweb\Api\Operation\Customer\RetrieveCustomer;
use Starweb\Api\Operation\CustomerAddress\UpdateCustomerAddress;

class CustomerResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return CustomerCollection
     */
    public function list(array $parameters = []): CustomerCollection
    {
        $response = $this->performOperation(
            new ListCustomers($this, $parameters, $this->getPathParameters())
        );

        return $response->getContentAsModel(CustomerCollection::class);
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     *
     * @throws \Http\Client\Exception
     */
    public function create(Customer $customer): Customer
    {
        $response = $this->performOperation(
            new CreateCustomer(
                $this,
                $this->getSerializer()->normalize($customer),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(CustomerItem::class);

        return $item->getData();
    }

    /**
     * @param int $customerId
     *
     * @return Customer
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $customerId): Customer
    {
        $pathParameters = array_merge($this->getPathParameters(), ['customerId' => $customerId]);
        $response = $this->performOperation(
            new RetrieveCustomer($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(CustomerItem::class);

        return $item->getData();
    }

    /**
     * @param int $customerId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $customerId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['customerId' => $customerId]);
        $response = $this->performOperation(
            new DeleteCustomer($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $customerId
     *
     * @return Customer
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $customerId, Customer $customer): Customer
    {
        $pathParameters = array_merge($this->getPathParameters(), ['customerId' => $customerId]);
        $response = $this->performOperation(
            new ReplaceCustomer(
                $this,
                $this->getSerializer()->normalize($customer),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(CustomerItem::class);

        return $item->getData();
    }

    /**
     * @param int $customerId
     * @param Customer $customer
     *
     * @return Customer
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $customerId, Customer $customer): Customer
    {
        $pathParameters = array_merge($this->getPathParameters(), ['customerId' => $customerId]);
        $response = $this->performOperation(
            new UpdateCustomerAddress(
                $this,
                $this->getSerializer()->normalize($customer),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(CustomerItem::class);

        return $item->getData();
    }
}
