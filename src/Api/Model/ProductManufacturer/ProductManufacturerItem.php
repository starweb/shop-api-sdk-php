<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductManufacturer;

class ProductManufacturerItem
{
    /**
     * @var ProductManufacturer
     */
    protected $data;

    /**
     * @return ProductManufacturer
     */
    public function getData(): ?ProductManufacturer
    {
        return $this->data;
    }

    /**
     * @param ProductManufacturer $data
     *
     * @return self
     */
    public function setData(ProductManufacturer $data): self
    {
        $this->data = $data;

        return $this;
    }
}
