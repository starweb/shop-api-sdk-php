<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeLanguageModelCollection
{
    /**
     * A collection of product meta data type languages
     *
     * @var ProductMetaDataTypeLanguageModel[]|null
     */
    protected $data;
    /**
     * A collection of product meta data type languages
     *
     * @return ProductMetaDataTypeLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data type languages
     *
     * @param ProductMetaDataTypeLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}