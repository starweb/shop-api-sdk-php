<?php declare(strict_types=1);

namespace Starweb\Api\Model\Pricelist;

class PricelistItem
{
    /**
     * @var Pricelist
     */
    protected $data;

    /**
     * @return Pricelist
     */
    public function getData(): ?Pricelist
    {
        return $this->data;
    }

    /**
     * @param Pricelist $data
     *
     * @return self
     */
    public function setData(Pricelist $data): self
    {
        $this->data = $data;

        return $this;
    }
}
