<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModelCollection extends \ArrayObject
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
     * A list of product tag options
     *
     * @var ProductTagOptionModel[]|null
     */
    protected $data;
    /**
     * A list of product tag options
     *
     * @return ProductTagOptionModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product tag options
     *
     * @param ProductTagOptionModel[]|null $data
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