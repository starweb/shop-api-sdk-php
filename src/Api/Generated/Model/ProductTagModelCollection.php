<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModelCollection extends \ArrayObject
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
     * A list of product tags
     *
     * @var ProductTagModel[]
     */
    protected $data;
    /**
     * A list of product tags
     *
     * @return ProductTagModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of product tags
     *
     * @param ProductTagModel[] $data
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