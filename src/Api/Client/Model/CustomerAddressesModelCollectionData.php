<?php

namespace Starweb\Api\Client\Model;

class CustomerAddressesModelCollectionData
{
    /**
     * 
     *
     * @var AddressModel
     */
    protected $invoice;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $delivery;
    /**
     * 
     *
     * @return AddressModel
     */
    public function getInvoice() : ?AddressModel
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
    /**
     * 
     *
     * @return AddressModel
     */
    public function getDelivery() : ?AddressModel
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
}