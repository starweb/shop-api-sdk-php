<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModelItem extends \ArrayObject
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
     * @var CustomerExternalServicesModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerExternalServicesModel|null
     */
    public function getData() : ?CustomerExternalServicesModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExternalServicesModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerExternalServicesModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}