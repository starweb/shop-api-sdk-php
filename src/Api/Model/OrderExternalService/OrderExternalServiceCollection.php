<?php declare(strict_types=1);

namespace Starweb\Api\Model\OrderExternalService;

class OrderExternalServiceCollection
{
    /**
     * A list of order external services
     *
     * @var OrderExternalService[]
     */
    protected $data;

    /**
     * A list of order external services
     *
     * @return OrderExternalService[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A list of order external services
     *
     * @param OrderExternalService[]
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
