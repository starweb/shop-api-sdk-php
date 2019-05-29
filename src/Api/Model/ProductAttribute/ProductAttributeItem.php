<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductAttribute;

class ProductAttributeItem
{
    /**
     * @var ProductAttribute
     */
    protected $data;

    /**
     * @return ProductAttribute
     */
    public function getData(): ?ProductAttribute
    {
        return $this->data;
    }

    /**
     * @param ProductAttribute $data
     *
     * @return self
     */
    public function setData(ProductAttribute $data): self
    {
        $this->data = $data;

        return $this;
    }
}
