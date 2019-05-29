<?php declare(strict_types=1);

namespace Starweb\Api\Model\OrderAddress;

use Starweb\Api\Model\Address\Address;

class OrderAddress
{
    /**
     * @var Address
     */
    protected $customerDelivery;

    /**
     * @var Address
     */
    protected $customerInvoice;

    /**
     * @var Address
     */
    protected $originalDelivery;

    /**
     * @var Address
     */
    protected $originalInvoice;

    /**
     * @var Address
     */
    protected $paymentMethodDelivery;

    /**
     * @var Address
     */
    protected $paymentMethodInvoice;

    /**
     * @return Address
     */
    public function getCustomerDelivery(): ?Address
    {
        return $this->customerDelivery;
    }

    /**
     * @param Address $customerDelivery
     *
     * @return self
     */
    public function setCustomerDelivery(Address $customerDelivery): self
    {
        $this->customerDelivery = $customerDelivery;

        return $this;
    }

    /**
     * @return Address
     */
    public function getCustomerInvoice(): ?Address
    {
        return $this->customerInvoice;
    }

    /**
     * @param Address $customerInvoice
     *
     * @return self
     */
    public function setCustomerInvoice(Address $customerInvoice): self
    {
        $this->customerInvoice = $customerInvoice;

        return $this;
    }

    /**
     * @return Address
     */
    public function getOriginalDelivery(): ?Address
    {
        return $this->originalDelivery;
    }

    /**
     * @param Address $originalDelivery
     *
     * @return self
     */
    public function setOriginalDelivery(Address $originalDelivery): self
    {
        $this->originalDelivery = $originalDelivery;

        return $this;
    }

    /**
     * @return Address
     */
    public function getOriginalInvoice(): ?Address
    {
        return $this->originalInvoice;
    }

    /**
     *
     *
     * @param Address $originalInvoice
     *
     * @return self
     */
    public function setOriginalInvoice(Address $originalInvoice): self
    {
        $this->originalInvoice = $originalInvoice;

        return $this;
    }

    /**
     *
     *
     * @return Address
     */
    public function getPaymentMethodDelivery(): ?Address
    {
        return $this->paymentMethodDelivery;
    }

    /**
     *
     *
     * @param Address $paymentMethodDelivery
     *
     * @return self
     */
    public function setPaymentMethodDelivery(Address $paymentMethodDelivery): self
    {
        $this->paymentMethodDelivery = $paymentMethodDelivery;

        return $this;
    }

    /**
     *
     *
     * @return Address
     */
    public function getPaymentMethodInvoice(): ?Address
    {
        return $this->paymentMethodInvoice;
    }

    /**
     *
     *
     * @param Address $paymentMethodInvoice
     *
     * @return self
     */
    public function setPaymentMethodInvoice(Address $paymentMethodInvoice): self
    {
        $this->paymentMethodInvoice = $paymentMethodInvoice;

        return $this;
    }
}
