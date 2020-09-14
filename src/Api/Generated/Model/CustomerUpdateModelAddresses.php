<?php

namespace Starweb\Api\Generated\Model;

class CustomerUpdateModelAddresses
{
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $invoice;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $delivery;
    /**
     * 
     *
     * @return AddressModel|null
     */
    public function getInvoice() : ?AddressModel
    {
        return $this->invoice;
    }
    /**
     * 
     *
     * @param AddressModel|null $invoice
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
     * @return AddressModel|null
     */
    public function getDelivery() : ?AddressModel
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param AddressModel|null $delivery
     *
     * @return self
     */
    public function setDelivery(?AddressModel $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
}