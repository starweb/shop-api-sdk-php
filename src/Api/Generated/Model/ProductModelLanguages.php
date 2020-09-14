<?php

namespace Starweb\Api\Generated\Model;

class ProductModelLanguages
{
    /**
     * A collection of product languages
     *
     * @var ProductLanguageSlimModel[]|null
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageSlimModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageSlimModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}