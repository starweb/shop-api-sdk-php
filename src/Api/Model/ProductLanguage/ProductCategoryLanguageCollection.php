<?php

namespace Starweb\Api\Model\ProductLanguage;

class ProductCategoryLanguageCollection
{
    /**
     * A collection of product languages
     *
     * @var ProductCategoryLanguage[]
     */
    protected $data;

    /**
     * A collection of product languages
     *
     * @return ProductCategoryLanguage[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product languages
     *
     * @param ProductCategoryLanguage[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
