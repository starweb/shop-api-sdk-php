<?php

namespace Starweb\Api\Generated\Model;

class ProductModelCollectionMeta
{
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
    public function getPagination() : ?PaginationModel
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
    public function setPagination(?PaginationModel $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
}