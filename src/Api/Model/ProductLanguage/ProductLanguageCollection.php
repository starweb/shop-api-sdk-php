<?php

namespace Starweb\Api\Model\ProductLanguage;

use Starweb\Api\Model\CollectionInterface;

class ProductLanguageCollection implements CollectionInterface
{
    /**
     * A collection of product languages
     *
     * @var ProductLanguage[]
     */
    protected $data;

    /**
     * A collection of product languages
     *
     * @return ProductLanguage[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of product languages
     *
     * @param ProductLanguage[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
