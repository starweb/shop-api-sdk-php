<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModelCollection extends \ArrayObject
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
     * @var CustomerTagModel[]|null
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerTagModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerTagModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}