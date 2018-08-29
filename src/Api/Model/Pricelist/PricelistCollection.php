<?php

namespace Starweb\Api\Model\Pricelist;

class PricelistCollection
{
    /**
     * A collection of shipping methods
     *
     * @var Pricelist[]
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return Pricelist[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param Pricelist[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}