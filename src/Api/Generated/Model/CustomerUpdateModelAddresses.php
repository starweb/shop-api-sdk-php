<?php

namespace Starweb\Api\Generated\Model;

class CustomerUpdateModelAddresses extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getInvoice() : AddressModel
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
    public function setInvoice(AddressModel $invoice) : self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getDelivery() : AddressModel
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
    public function setDelivery(AddressModel $delivery) : self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
}