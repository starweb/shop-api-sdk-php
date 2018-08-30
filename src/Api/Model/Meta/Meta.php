<?php

namespace Starweb\Api\Model\Meta;

use Starweb\Api\Model\Meta\Pagination;

class Meta
{
    /**
     * @var Pagination
     */
    protected $pagination;

    /**
     * @return Pagination
     */
    public function getPagination() : ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     *
     * @return self
     */
    public function setPagination(Pagination $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
}
