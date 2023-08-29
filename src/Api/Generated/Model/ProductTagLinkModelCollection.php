<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModelCollection extends \ArrayObject
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
     * A collection of product tag links
     *
     * @var ProductTagLinkModel[]|null
     */
    protected $data;
    /**
     * A collection of product tag links
     *
     * @return ProductTagLinkModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product tag links
     *
     * @param ProductTagLinkModel[]|null $data
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