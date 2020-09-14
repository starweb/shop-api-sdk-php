<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusLanguageModelCollection
{
    /**
     * 
     *
     * @var OrderStatusLanguageModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderStatusLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderStatusLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}