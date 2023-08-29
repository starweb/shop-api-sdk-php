<?php

namespace Starweb\Api\Generated\Model;

class ProductMediaFileLinkModelItem extends \ArrayObject
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
     * 
     *
     * @var ProductMediaFileLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMediaFileLinkModel|null
     */
    public function getData() : ?ProductMediaFileLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMediaFileLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductMediaFileLinkModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}