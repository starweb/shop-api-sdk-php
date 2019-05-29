<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductMetaDataType;

class ProductMetaDataTypeItem
{
    /**
     *
     *
     * @var ProductMetaDataType
     */
    protected $data;

    /**
     *
     *
     * @return ProductMetaDataType
     */
    public function getData(): ?ProductMetaDataType
    {
        return $this->data;
    }

    /**
     *
     *
     * @param ProductMetaDataType $data
     *
     * @return self
     */
    public function setData(ProductMetaDataType $data): self
    {
        $this->data = $data;

        return $this;
    }
}
