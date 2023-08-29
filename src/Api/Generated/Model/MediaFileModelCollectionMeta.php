<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModelCollectionMeta extends \ArrayObject
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
     * @var PaginationModel
     */
    protected $pagination;
    /**
     * 
     *
     * @return PaginationModel
     */
    public function getPagination() : PaginationModel
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param PaginationModel $pagination
     *
     * @return self
     */
    public function setPagination(PaginationModel $pagination) : self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}