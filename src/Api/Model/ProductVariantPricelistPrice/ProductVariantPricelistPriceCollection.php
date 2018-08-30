<?php

namespace Starweb\Api\Model\ProductVariantPricelistPrice;

class ProductVariantPricelistPriceCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantPricelistPrice[]
     */
    protected $data;

    /**
     * A collection of product variants
     *
     * @return ProductVariantPricelistPrice[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product variants
     *
     * @param ProductVariantPricelistPrice[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
