<?php

namespace Starweb\Api\Generated\Model;

class ProductMediaFileLinkModelCollection
{
    /**
     * A collection of product media file links
     *
     * @var ProductMediaFileLinkModel[]|null
     */
    protected $data;
    /**
     * A collection of product media file links
     *
     * @return ProductMediaFileLinkModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product media file links
     *
     * @param ProductMediaFileLinkModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}