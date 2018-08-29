<?php

namespace Starweb\Api\Model\ProductLanguage;

class ProductLanguageItem
{
    /**
     * 
     *
     * @var ProductLanguage
     */
    protected $data;
    /**
     * 
     *
     * @return ProductLanguage
     */
    public function getData() : ?ProductLanguage
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductLanguageModel $data
     *
     * @return self
     */
    public function setData(?ProductLanguageModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}