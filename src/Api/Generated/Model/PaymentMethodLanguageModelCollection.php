<?php

namespace Starweb\Api\Generated\Model;

class PaymentMethodLanguageModelCollection extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}