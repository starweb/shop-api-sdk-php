<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModelItem extends \ArrayObject
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
     * @var ProductTagLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagLinkModel|null
     */
    public function getData() : ?ProductTagLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagLinkModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}