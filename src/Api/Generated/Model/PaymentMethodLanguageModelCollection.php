<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodLanguageModelCollection
{
    /**
     * A collection of payment method languages
     *
     * @var PaymentMethodLanguageModel[]|null
     */
    protected $data;
    /**
     * A collection of payment method languages
     *
     * @return PaymentMethodLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of payment method languages
     *
     * @param PaymentMethodLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}