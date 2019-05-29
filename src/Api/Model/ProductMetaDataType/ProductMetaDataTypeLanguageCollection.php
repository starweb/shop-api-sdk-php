<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductMetaDataType;

class ProductMetaDataTypeLanguageCollection
{
    /**
     * A collection of product meta data type languages
     *
     * @var ProductMetaDataTypeLanguage[]
     */
    protected $data;

    /**
     * A collection of product meta data type languages
     *
     * @return ProductMetaDataTypeLanguage[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product meta data type languages
     *
     * @param ProductMetaDataTypeLanguage[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
