<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelCollectionMeta
{
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
        $this->pagination = $pagination;
        return $this;
    }
}