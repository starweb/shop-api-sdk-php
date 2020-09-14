<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusResponseModelLanguages
{
    /**
     * 
     *
     * @var ProductStockStatusLanguageModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}