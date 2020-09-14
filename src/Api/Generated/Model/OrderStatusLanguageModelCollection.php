<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusLanguageModelCollection
{
    /**
     * 
     *
     * @var OrderStatusLanguageModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return OrderStatusLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderStatusLanguageModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}