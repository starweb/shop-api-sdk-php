<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitLanguageModelCollection
{
    /**
     * A collection of product unit languages
     *
     * @var ProductUnitLanguageModel[]|null
     */
    protected $data;
    /**
     * A collection of product unit languages
     *
     * @return ProductUnitLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product unit languages
     *
     * @param ProductUnitLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}