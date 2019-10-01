<?php

namespace Starweb\Api\Generated\Model;

class StockLocationLanguagesModelCollection
{
    /**
     * A collection of category languages
     *
     * @var StockLocationLanguagesModel[]
     */
    protected $data;
    /**
     * A collection of category languages
     *
     * @return StockLocationLanguagesModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of category languages
     *
     * @param StockLocationLanguagesModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}