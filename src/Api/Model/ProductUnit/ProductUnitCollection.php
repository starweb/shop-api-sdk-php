<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductUnit;

class ProductUnitCollection
{
    /**
     * A collection of product units
     *
     * @var ProductUnit[]
     */
    protected $data;

    /**
     * A collection of product units
     *
     * @return ProductUnit[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product units
     *
     * @param ProductUnit[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
