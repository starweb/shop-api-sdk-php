<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressModel
{
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $originalInvoice;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $originalDelivery;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $customerInvoice;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $customerDelivery;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $paymentMethodInvoice;
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $paymentMethodDelivery;
    /**
     * 
     *
     * @return AddressModel|null
     */
    public function getOriginalInvoice() : ?AddressModel
    {
        return $this->originalInvoice;
    }
    /**
     * 
     *
     * @param AddressModel|null $originalInvoice
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
     * @return AddressModel|null
     */
    public function getOriginalDelivery() : ?AddressModel
    {
        return $this->originalDelivery;
    }
    /**
     * 
     *
     * @param AddressModel|null $originalDelivery
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
     * @return AddressModel|null
     */
    public function getCustomerInvoice() : ?AddressModel
    {
        return $this->customerInvoice;
    }
    /**
     * 
     *
     * @param AddressModel|null $customerInvoice
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
     * @return AddressModel|null
     */
    public function getCustomerDelivery() : ?AddressModel
    {
        return $this->customerDelivery;
    }
    /**
     * 
     *
     * @param AddressModel|null $customerDelivery
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
     * @return AddressModel|null
     */
    public function getPaymentMethodInvoice() : ?AddressModel
    {
        return $this->paymentMethodInvoice;
    }
    /**
     * 
     *
     * @param AddressModel|null $paymentMethodInvoice
     *
     * @return self
     */
    public function setPaymentMethodInvoice(?AddressModel $paymentMethodInvoice) : self
    {
        $this->paymentMethodInvoice = $paymentMethodInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel|null
     */
    public function getPaymentMethodDelivery() : ?AddressModel
    {
        return $this->paymentMethodDelivery;
    }
    /**
     * 
     *
     * @param AddressModel|null $paymentMethodDelivery
     *
     * @return self
     */
    public function setPaymentMethodDelivery(?AddressModel $paymentMethodDelivery) : self
    {
        $this->paymentMethodDelivery = $paymentMethodDelivery;
        return $this;
    }
}