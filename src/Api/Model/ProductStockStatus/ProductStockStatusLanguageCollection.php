<?php

namespace Starweb\Api\Model\ProductStockStatus;

class ProductStockStatusLanguageCollection
{
    /**
     * A list of product stock statuses
     *
     * @var ProductStockStatusLanguage[]
     */
    protected $data;

    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatus[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatusLanguage[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
