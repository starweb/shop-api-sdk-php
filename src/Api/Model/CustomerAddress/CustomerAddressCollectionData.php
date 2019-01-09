<?php

namespace Starweb\Api\Model\CustomerAddress;

use Starweb\Api\Model\Address\Address;

class CustomerAddressCollectionData
{
    /**
     *
     *
     * @var Address
     */
    protected $delivery;
    /**
     *
     *
     * @var Address
     */
    protected $invoice;

    /**
     *
     *
     * @return Address
     */
    public function getDelivery(): ?Address
    {
        return $this->delivery;
    }

    /**
     *
     *
     * @param Address $delivery
     *
     * @return self
     */
    public function setDelivery(Address $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     *
     *
     * @return Address
     */
    public function getInvoice(): ?Address
    {
        return $this->invoice;
    }

    /**
     *
     *
     * @param Address $invoice
     *
     * @return self
     */
    public function setInvoice(Address $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }
}
