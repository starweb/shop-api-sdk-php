<?php

namespace Starweb\Api\Model\PaymentMethod;

class PaymentMethodLanguageCollection
{
    /**
     * A collection of payment method languages
     *
     * @var PaymentMethodLanguage[]
     */
    protected $data;
    /**
     * A collection of payment method languages
     *
     * @return PaymentMethodLanguage[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of payment method languages
     *
     * @param PaymentMethodLanguage[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
