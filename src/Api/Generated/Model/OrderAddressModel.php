<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressModel
{
    /**
     * 
     *
     * @var mixed
     */
    protected $originalInvoice;
    /**
     * 
     *
     * @var mixed
     */
    protected $originalDelivery;
    /**
     * 
     *
     * @var mixed
     */
    protected $customerInvoice;
    /**
     * 
     *
     * @var mixed
     */
    protected $customerDelivery;
    /**
     * 
     *
     * @var mixed
     */
    protected $paymentMethodInvoice;
    /**
     * 
     *
     * @var mixed
     */
    protected $paymentMethodDelivery;
    /**
     * 
     *
     * @return mixed
     */
    public function getOriginalInvoice()
    {
        return $this->originalInvoice;
    }
    /**
     * 
     *
     * @param mixed $originalInvoice
     *
     * @return self
     */
    public function setOriginalInvoice($originalInvoice) : self
    {
        $this->originalInvoice = $originalInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getOriginalDelivery()
    {
        return $this->originalDelivery;
    }
    /**
     * 
     *
     * @param mixed $originalDelivery
     *
     * @return self
     */
    public function setOriginalDelivery($originalDelivery) : self
    {
        $this->originalDelivery = $originalDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCustomerInvoice()
    {
        return $this->customerInvoice;
    }
    /**
     * 
     *
     * @param mixed $customerInvoice
     *
     * @return self
     */
    public function setCustomerInvoice($customerInvoice) : self
    {
        $this->customerInvoice = $customerInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCustomerDelivery()
    {
        return $this->customerDelivery;
    }
    /**
     * 
     *
     * @param mixed $customerDelivery
     *
     * @return self
     */
    public function setCustomerDelivery($customerDelivery) : self
    {
        $this->customerDelivery = $customerDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPaymentMethodInvoice()
    {
        return $this->paymentMethodInvoice;
    }
    /**
     * 
     *
     * @param mixed $paymentMethodInvoice
     *
     * @return self
     */
    public function setPaymentMethodInvoice($paymentMethodInvoice) : self
    {
        $this->paymentMethodInvoice = $paymentMethodInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPaymentMethodDelivery()
    {
        return $this->paymentMethodDelivery;
    }
    /**
     * 
     *
     * @param mixed $paymentMethodDelivery
     *
     * @return self
     */
    public function setPaymentMethodDelivery($paymentMethodDelivery) : self
    {
        $this->paymentMethodDelivery = $paymentMethodDelivery;
        return $this;
    }
}