<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelCollectionMeta extends \ArrayObject
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
     * 
     *
     * @var PaginationModel|null
     */
    protected $pagination;
    /**
     * 
     *
     * @return PaginationModel|null
     */
    public function getPagination() : ?PaginationModel
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param PaginationModel|null $pagination
     *
     * @return self
     */
    public function setPagination(?PaginationModel $pagination) : self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}