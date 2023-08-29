<?php

namespace Starweb\Api\Generated\Model;

class ShippingTrackingTypeModel extends \ArrayObject
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
     * The shipping tracking type ID
     *
     * @var int
     */
    protected $type;
    /**
     * The shipping tracking type name
     *
     * @var string
     */
    protected $name;
    /**
     * The shipping tracking type ID
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * The shipping tracking type ID
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The shipping tracking type name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The shipping tracking type name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}