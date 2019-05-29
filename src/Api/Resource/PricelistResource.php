<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Pricelist\Pricelist;
use Starweb\Api\Model\Pricelist\PricelistCollection;
use Starweb\Api\Model\Pricelist\PricelistItem;
use Starweb\Api\Operation\Pricelist\ListPricelists;
use Starweb\Api\Operation\Pricelist\RetrievePricelist;

class PricelistResource extends Resource
{
    /**
     * @return PricelistCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): PricelistCollection
    {
        $response = $this->performOperation(
            new ListPricelists($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(PricelistCollection::class);
    }

    /**
     * @param string $pricelistId
     *
     * @return Pricelist
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $pricelistId): Pricelist
    {
        $pathParameters = array_merge($this->getPathParameters(), ['pricelistId' => $pricelistId]);
        $response = $this->performOperation(
            new RetrievePricelist($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(PricelistItem::class);

        return $item->getData();
    }
}
