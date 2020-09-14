<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModelCollection
{
    /**
     * A list of product tags
     *
     * @var ProductTagModel[]|null
     */
    protected $data;
    /**
     * A list of product tags
     *
     * @return ProductTagModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product tags
     *
     * @param ProductTagModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}