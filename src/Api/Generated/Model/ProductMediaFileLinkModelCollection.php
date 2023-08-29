<?php

namespace Starweb\Api\Generated\Model;

class ProductMediaFileLinkModelCollection extends \ArrayObject
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
     * A collection of product media file links
     *
     * @var ProductMediaFileLinkModel[]
     */
    protected $data;
    /**
     * A collection of product media file links
     *
     * @return ProductMediaFileLinkModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product media file links
     *
     * @param ProductMediaFileLinkModel[] $data
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