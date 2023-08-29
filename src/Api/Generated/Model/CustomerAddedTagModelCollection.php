<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddedTagModelCollection extends \ArrayObject
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
     * A list of customer tags
     *
     * @var CustomerAddedTagModel[]
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerAddedTagModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerAddedTagModel[] $data
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