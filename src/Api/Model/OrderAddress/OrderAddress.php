<?php

namespace Starweb\Api\Model\OrderAddress;

class OrderAddress
{
    /**
     * 
     *
     * @var Address
     */
    protected $customerDelivery;
    /**
     * 
     *
     * @var Address
     */
    protected $customerInvoice;
    /**
     * 
     *
     * @var Address
     */
    protected $originalDelivery;
    /**
     * 
     *
     * @var Address
     */
    protected $originalInvoice;
    /**
     * 
     *
     * @var Address
     */
    protected $paymentMethodDelivery;
    /**
     * 
     *
     * @var Address
     */
    protected $paymentMethodInvoice;
    /**
     * 
     *
     * @return Address
     */
    public function getCustomerDelivery() : ?Address
    {
        return $this->customerDelivery;
    }
    /**
     * 
     *
     * @param AddressModel $customerDelivery
     *
     * @return self
     */
    public function setCustomerDelivery(?AddressModel $customerDelivery) : self
    {
        $this->customerDelivery = $customerDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getCustomerInvoice() : ?Address
    {
        return $this->customerInvoice;
    }
    /**
     * 
     *
     * @param AddressModel $customerInvoice
     *
     * @return self
     */
    public function setCustomerInvoice(?AddressModel $customerInvoice) : self
    {
        $this->customerInvoice = $customerInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getOriginalDelivery() : ?Address
    {
        return $this->originalDelivery;
    }
    /**
     * 
     *
     * @param AddressModel $originalDelivery
     *
     * @return self
     */
    public function setOriginalDelivery(?AddressModel $originalDelivery) : self
    {
        $this->originalDelivery = $originalDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getOriginalInvoice() : ?Address
    {
        return $this->originalInvoice;
    }
    /**
     * 
     *
     * @param AddressModel $originalInvoice
     *
     * @return self
     */
    public function setOriginalInvoice(?AddressModel $originalInvoice) : self
    {
        $this->originalInvoice = $originalInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getPaymentMethodDelivery() : ?Address
    {
        return $this->paymentMethodDelivery;
    }
    /**
     * 
     *
     * @param AddressModel $paymentMethodDelivery
     *
     * @return self
     */
    public function setPaymentMethodDelivery(?AddressModel $paymentMethodDelivery) : self
    {
        $this->paymentMethodDelivery = $paymentMethodDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getPaymentMethodInvoice() : ?Address
    {
        return $this->paymentMethodInvoice;
    }
    /**
     * 
     *
     * @param AddressModel $paymentMethodInvoice
     *
     * @return self
     */
    public function setPaymentMethodInvoice(?AddressModel $paymentMethodInvoice) : self
    {
        $this->paymentMethodInvoice = $paymentMethodInvoice;
        return $this;
    }
}