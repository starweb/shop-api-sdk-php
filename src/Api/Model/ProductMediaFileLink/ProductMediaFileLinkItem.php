<?php

namespace Starweb\Api\Model\ProductMediaFileLink;

class ProductMediaFileLinkItem
{
    /**
     *
     *
     * @var ProductMediaFileLink
     */
    protected $data;
    /**
     *
     *
     * @return ProductMediaFileLink
     */
    public function getData() : ?ProductMediaFileLink
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductMediaFileLinkModel $data
     *
     * @return self
     */
    public function setData(?ProductMediaFileLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
