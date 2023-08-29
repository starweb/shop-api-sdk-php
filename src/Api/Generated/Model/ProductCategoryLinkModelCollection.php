<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLinkModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A collection of product category links
     *
     * @var ProductCategoryLinkModel[]|null
     */
    protected $data;
    /**
     * A collection of product category links
     *
     * @return ProductCategoryLinkModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product category links
     *
     * @param ProductCategoryLinkModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}