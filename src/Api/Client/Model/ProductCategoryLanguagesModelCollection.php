<?php

namespace Starweb\Api\Client\Model;

class ProductCategoryLanguagesModelCollection
{
    /**
     * A collection of category languages
     *
     * @var ProductCategoryLanguagesModel[]
     */
    protected $data;
    /**
     * A collection of category languages
     *
     * @return ProductCategoryLanguagesModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of category languages
     *
     * @param ProductCategoryLanguagesModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}