<?php

namespace Starweb\Api\Model\CustomerAddress;

class CustomerAddressesCollectionData
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
    public function getDelivery() : ?Address
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param AddressModel $delivery
     *
     * @return self
     */
    public function setDelivery(?AddressModel $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getInvoice() : ?Address
    {
        return $this->invoice;
    }
    /**
     * 
     *
     * @param AddressModel $invoice
     *
     * @return self
     */
    public function setInvoice(?AddressModel $invoice) : self
    {
        $this->invoice = $invoice;
        return $this;
    }
}