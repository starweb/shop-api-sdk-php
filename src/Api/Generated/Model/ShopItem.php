<?php

namespace Starweb\Api\Generated\Model;

class ShopItem extends \ArrayObject
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
     * @var ShopModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ShopModel|null
     */
    public function getData() : ?ShopModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShopModel|null $data
     *
     * @return self
     */
    public function setData(?ShopModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}