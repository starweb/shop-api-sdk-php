<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodLanguageModelCollection extends \ArrayObject
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
     * A collection of shipping method languages
     *
     * @var ShippingMethodLanguageModel[]
     */
    protected $data;
    /**
     * A collection of shipping method languages
     *
     * @return ShippingMethodLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of shipping method languages
     *
     * @param ShippingMethodLanguageModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}