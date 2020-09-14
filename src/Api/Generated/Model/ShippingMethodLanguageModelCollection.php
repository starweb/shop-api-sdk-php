<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodLanguageModelCollection
{
    /**
     * A collection of shipping method languages
     *
     * @var ShippingMethodLanguageModel[]|null
     */
    protected $data;
    /**
     * A collection of shipping method languages
     *
     * @return ShippingMethodLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping method languages
     *
     * @param ShippingMethodLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}