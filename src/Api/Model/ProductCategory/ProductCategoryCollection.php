<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductCategory;

use Starweb\Api\Model\Meta\Meta;

class ProductCategoryCollection
{
    /**
     * A list of product categories
     *
     * @var ProductCategory[]
     */
    protected $data;

    /**
     *
     *
     * @var Meta
     */
    protected $meta;

    /**
     * A list of product categories
     *
     * @return ProductCategory[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of product categories
     *
     * @param ProductCategory[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     *
     *
     * @return Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

    /**
     *
     *
     * @param Meta $meta
     *
     * @return self
     */
    public function setMeta(Meta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}
