<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageModelItem
{
    /**
     * 
     *
     * @var ProductLanguageModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductLanguageModel|null
     */
    public function getData() : ?ProductLanguageModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductLanguageModel|null $data
     *
     * @return self
     */
    public function setData(?ProductLanguageModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}