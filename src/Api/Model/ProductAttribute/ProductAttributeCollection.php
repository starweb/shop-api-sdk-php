<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductAttribute;

use Starweb\Api\Model\CollectionInterface;

class ProductAttributeCollection implements CollectionInterface
{
    /**
     * A collection of attribute values
     *
     * @var ProductAttribute[]
     */
    protected $data;

    /**
     * A collection of attribute values
     *
     * @return ProductAttribute[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of attribute values
     *
     * @param ProductAttribute[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
