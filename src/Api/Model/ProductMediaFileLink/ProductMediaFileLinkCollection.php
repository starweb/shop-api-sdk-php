<?php

namespace Starweb\Api\Model\ProductMediaFileLink;

class ProductMediaFileLinkCollection
{
    /**
     * A collection of product media file links
     *
     * @var ProductMediaFileLink[]
     */
    protected $data;
    /**
     * A collection of product media file links
     *
     * @return ProductMediaFileLink[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product media file links
     *
     * @param ProductMediaFileLink[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
