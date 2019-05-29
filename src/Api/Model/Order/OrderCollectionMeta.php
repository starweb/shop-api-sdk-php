<?php declare(strict_types=1);

namespace Starweb\Api\Model\Order;

use Starweb\Api\Model\Pagination;

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
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     *
     *
     * @param Pagination $pagination
     *
     * @return self
     */
    public function setPagination(Pagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
