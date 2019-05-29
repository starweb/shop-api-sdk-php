<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductMetaDataType\ProductMetaDataType;
use Starweb\Api\Model\ProductMetaDataType\ProductMetaDataTypeCollection;
use Starweb\Api\Model\ProductMetaDataType\ProductMetaDataTypeItem;
use Starweb\Api\Operation\ProductMetaDataType\ListProductMetaDataTypes;
use Starweb\Api\Operation\ProductMetaDataType\RetrieveProductMetaDataType;

class ProductMetaDataTypeResource extends Resource
{
    /**
     * @return ProductMetaDataTypeCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductMetaDataTypeCollection
    {
        $response = $this->performOperation(
            new ListProductMetaDataTypes($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductMetaDataTypeCollection::class);
    }

    /**
     * @param string $metaDataTypeId
     *
     * @return ProductMetaDataType
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $metaDataTypeId): ProductMetaDataType
    {
        $pathParameters = array_merge($this->getPathParameters(), ['metaDataTypeId' => $metaDataTypeId]);
        $response = $this->performOperation(
            new RetrieveProductMetaDataType($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductMetaDataTypeItem::class);

        return $item->getData();
    }
}
