<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductMetaData\ProductMetaDataCollection;
use Starweb\Api\Model\ProductMetaData\ProductMetaData;
use Starweb\Api\Model\ProductMetaData\ProductMetaDataItem;
use Starweb\Api\Operation\ProductMetaData\CreateProductMetaData;
use Starweb\Api\Operation\ProductMetaData\DeleteProductMetaData;
use Starweb\Api\Operation\ProductMetaData\ListProductMetaData;
use Starweb\Api\Operation\ProductMetaData\ReplaceProductMetaData;
use Starweb\Api\Operation\ProductMetaData\RetrieveProductMetaData;
use Starweb\Api\Operation\ProductMetaData\UpdateProductMetaData;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductMetaDataResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductMetaDataCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductMetaDataCollection
    {
        $response = $this->performOperation(
            new ListProductMetaData($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductMetaDataCollection::class);
    }

    /**
     * @param ProductMetaData $item
     *
     * @return ProductMetaData
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductMetaData $item): ProductMetaData
    {
        $response = $this->performOperation(
            new CreateProductMetaData(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductMetaDataItem::class);

        return $item->getData();
    }

    /**
     * @param int $metaDataTypeId
     *
     * @return ProductMetaData
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $metaDataTypeId): ProductMetaData
    {
        $pathParameters = array_merge($this->getPathParameters(), ['metaDataTypeId' => $metaDataTypeId]);
        $response = $this->performOperation(
            new RetrieveProductMetaData($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductMetaDataItem::class);

        return $item->getData();
    }

    /**
     * @param int $metaDataTypeId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $metaDataTypeId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['metaDataTypeId' => $metaDataTypeId]);
        $response = $this->performOperation(
            new DeleteProductMetaData($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $metaDataTypeId
     * @param ProductMetaData $status
     *
     * @return ProductMetaDataItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $metaDataTypeId, ProductMetaData $status): ProductMetaDataItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['metaDataTypeId' => $metaDataTypeId]);
        $response = $this->performOperation(
            new ReplaceProductMetaData(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductMetaDataItem::class);

        return $status->getData();
    }

    /**
     * @param int $metaDataTypeId
     * @param ProductMetaData $status
     *
     * @return ProductMetaData
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $metaDataTypeId, ProductMetaData $status): ProductMetaData
    {
        $pathParameters = array_merge($this->getPathParameters(), ['metaDataTypeId' => $metaDataTypeId]);
        $response = $this->performOperation(
            new UpdateProductMetaData(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductMetaDataItem::class);

        return $status->getData();
    }
}
