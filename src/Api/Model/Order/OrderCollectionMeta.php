<?php

namespace Starweb\Api\Model\Order;

class OrderCollectionMeta
{
    /**
     *
     *
     * @var Pagination
     */
    protected $pagination;
    /**
     *
     *
     * @return Pagination
     */
    public function getPagination() : ?Pagination
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
