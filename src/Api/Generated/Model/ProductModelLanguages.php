<?php

namespace Starweb\Api\Generated\Model;

class ProductModelLanguages
{
    /**
     * A collection of product languages
     *
     * @var ProductLanguageSlimModel[]
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageSlimModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageSlimModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}