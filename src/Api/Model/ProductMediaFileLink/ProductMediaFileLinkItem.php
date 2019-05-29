<?php declare(strict_types=1);

namespace Starweb\Api\Model\ProductMediaFileLink;

class ProductMediaFileLinkItem
{
    /**
     * @var ProductMediaFileLink
     */
    protected $data;

    /**
     * @return ProductMediaFileLink
     */
    public function getData(): ?ProductMediaFileLink
    {
        return $this->data;
    }

    /**
     * @param ProductMediaFileLink $data
     *
     * @return self
     */
    public function setData(ProductMediaFileLink $data): self
    {
        $this->data = $data;

        return $this;
    }
}
