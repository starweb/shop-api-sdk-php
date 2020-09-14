<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttributeModel[]|null
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}