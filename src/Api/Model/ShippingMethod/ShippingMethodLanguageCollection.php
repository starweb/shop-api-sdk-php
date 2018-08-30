<?php

 Starweb\Api\Model\ShippingMethod;

class ShippingMethodLanguageCollection
{
    /**
     * A collection of shipping method languages
     *
     * @var ShippingMethodLanguage[]
     */
    protected $data;
    /**
     * A collection of shipping method languages
     *
     * @return ShippingMethodLanguage[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of shipping method languages
     *
     * @param ShippingMethodLanguage[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
