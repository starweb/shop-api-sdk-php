<?php declare(strict_types=1);

namespace Starweb\Api\Model\CustomerAddress;

class CustomerAddressCollection
{
    /**
     *
     *
     * @var CustomerAddressCollectionData
     */
    protected $data;

    /**
     *
     *
     * @return CustomerAddressCollectionData
     */
    public function getData(): ?CustomerAddressCollectionData
    {
        return $this->data;
    }

    /**
     *
     *
     * @param CustomerAddressCollectionData $data
     *
     * @return self
     */
    public function setData(CustomerAddressCollectionData $data): self
    {
        $this->data = $data;

        return $this;
    }
}
