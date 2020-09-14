<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageModelCollection
{
    /**
     * A collection of product languages
     *
     * @var ProductLanguageModel[]|null
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}