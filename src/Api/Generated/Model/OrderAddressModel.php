<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressModel extends \ArrayObject
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
    protected $originalInvoice;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $originalDelivery;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $customerInvoice;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $customerDelivery;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $paymentMethodInvoice;
    /**
     * 
     *
     * @var AddressModel
     */
    protected $paymentMethodDelivery;
    /**
     * 
     *
     * @return AddressModel
     */
    public function getOriginalInvoice() : AddressModel
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
    public function setOriginalInvoice(AddressModel $originalInvoice) : self
    {
        $this->initialized['originalInvoice'] = true;
        $this->originalInvoice = $originalInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getOriginalDelivery() : AddressModel
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
    public function setOriginalDelivery(AddressModel $originalDelivery) : self
    {
        $this->initialized['originalDelivery'] = true;
        $this->originalDelivery = $originalDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getCustomerInvoice() : AddressModel
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
    public function setCustomerInvoice(AddressModel $customerInvoice) : self
    {
        $this->initialized['customerInvoice'] = true;
        $this->customerInvoice = $customerInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getCustomerDelivery() : AddressModel
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
    public function setCustomerDelivery(AddressModel $customerDelivery) : self
    {
        $this->initialized['customerDelivery'] = true;
        $this->customerDelivery = $customerDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getPaymentMethodInvoice() : AddressModel
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
    public function setPaymentMethodInvoice(AddressModel $paymentMethodInvoice) : self
    {
        $this->initialized['paymentMethodInvoice'] = true;
        $this->paymentMethodInvoice = $paymentMethodInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return AddressModel
     */
    public function getPaymentMethodDelivery() : AddressModel
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
    public function setPaymentMethodDelivery(AddressModel $paymentMethodDelivery) : self
    {
        $this->initialized['paymentMethodDelivery'] = true;
        $this->paymentMethodDelivery = $paymentMethodDelivery;
        return $this;
    }
}