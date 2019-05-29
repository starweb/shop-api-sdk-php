<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductMetaData;

class ProductMetaLanguageDataItem
{
    /**
     * @var ProductMetaLanguageData
     */
    protected $data;

    /**
     * @return ProductMetaLanguageData
     */
    public function getData(): ?ProductMetaLanguageData
    {
        return $this->data;
    }

    /**
     * @param ProductMetaLanguageData $data
     *
     * @return self
     */
    public function setData(ProductMetaLanguageData $data): self
    {
        $this->data = $data;

        return $this;
    }
}
