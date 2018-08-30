<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductUnit\ProductUnit;
use Starweb\Api\Model\ProductUnit\ProductUnitCollection;
use Starweb\Api\Model\ProductUnit\ProductUnitItem;
use Starweb\Api\Operation\ProductUnit\ListProductUnits;
use Starweb\Api\Operation\ProductUnit\RetrieveProductUnit;

class ProductUnitResource extends Resource
{
    /**
     * @return ProductUnitCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductUnitCollection
    {
        $response = $this->performOperation(
            new ListProductUnits($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductUnitCollection::class);
    }

    /**
     * @param string $unitId
     *
     * @return ProductUnit
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $unitId): ProductUnit
    {
        $pathParameters = array_merge($this->getPathParameters(), ['unitId' => $unitId]);
        $response = $this->performOperation(
            new RetrieveProductUnit($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductUnitItem::class);

        return $item->getData();
    }
}
