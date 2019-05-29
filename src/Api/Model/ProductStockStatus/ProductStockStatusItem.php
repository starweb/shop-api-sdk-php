<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductStockStatus;

class ProductStockStatusItem
{
    /**
     * @var ProductStockStatus
     */
    protected $data;

    /**
     * @return ProductStockStatus
     */
    public function getData(): ?ProductStockStatus
    {
        return $this->data;
    }

    /**
     * @param ProductStockStatus $data
     *
     * @return self
     */
    public function setData(ProductStockStatus $data): self
    {
        $this->data = $data;

        return $this;
    }
}
