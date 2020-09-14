<?php

namespace Starweb\Api\Generated\Model;

class PricelistModelCollection
{
    /**
     * A collection of pricelists
     *
     * @var PricelistModel[]|null
     */
    protected $data;
    /**
     * A collection of pricelists
     *
     * @return PricelistModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of pricelists
     *
     * @param PricelistModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}