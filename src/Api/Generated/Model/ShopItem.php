<?php

namespace Starweb\Api\Generated\Model;

class ShopItem
{
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
        $this->data = $data;
        return $this;
    }
}