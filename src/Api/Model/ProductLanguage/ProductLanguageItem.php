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
    public function getData(): ?ProductLanguage
    {
        return $this->data;
    }

    /**
     *
     *
     * @param ProductLanguage $data
     *
     * @return self
     */
    public function setData(ProductLanguage $data): self
    {
        $this->data = $data;

        return $this;
    }
}
