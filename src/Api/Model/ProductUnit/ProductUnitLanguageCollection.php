<?php

namespace Starweb\Api\Model\ProductUnit;

class ProductUnitLanguageCollection
{
    /**
     * A collection of product unit languages
     *
     * @var ProductUnitLanguage[]
     */
    protected $data;
    /**
     * A collection of product unit languages
     *
     * @return ProductUnitLanguage[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product unit languages
     *
     * @param ProductUnitLanguage[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
