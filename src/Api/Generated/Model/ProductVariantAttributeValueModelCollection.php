<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttributeValueModel[]|null
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeValueModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeValueModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}