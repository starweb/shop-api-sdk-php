<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModelCollection
{
    /**
     * A collection of product tag links
     *
     * @var ProductTagLinkModel[]
     */
    protected $data;
    /**
     * A collection of product tag links
     *
     * @return ProductTagLinkModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product tag links
     *
     * @param ProductTagLinkModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}