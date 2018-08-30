<?php

namespace Starweb\Api\Model\ProductVariantAttribute;

class ProductVariantAttributeLanguages
{
    /**
     *
     *
     * @var ProductVariantAttributeLanguage[]
     */
    protected $data;
    /**
     *
     *
     * @return ProductVariantAttributeLanguage[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductVariantAttributeLanguage[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
