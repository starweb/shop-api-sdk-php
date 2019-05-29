<?php declare(strict_types=1);

namespace Starweb\Api\Model\Product;

class ProductItem
{
    /**
     * @var Product
     */
    protected $data;

    /**
     * @return Product
     */
    public function getData(): ?Product
    {
        return $this->data;
    }

    /**
     * @param Product $data
     *
     * @return self
     */
    public function setData(Product $data): self
    {
        $this->data = $data;

        return $this;
    }
}
