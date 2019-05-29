<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductVatRate;

class ProductVatRateCollection
{
    /**
     * A collection of product vat rates
     *
     * @var ProductVatRate[]
     */
    protected $data;

    /**
     * A collection of product vat rates
     *
     * @return ProductVatRate[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product vat rates
     *
     * @param ProductVatRate[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
