<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusResponseModelLanguages
{
    /**
     * 
     *
     * @var ProductStockStatusLanguageModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusLanguageModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}