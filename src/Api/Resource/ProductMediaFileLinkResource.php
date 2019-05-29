<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductMediaFileLink\ProductMediaFileLinkCollection;
use Starweb\Api\Model\ProductMediaFileLink\ProductMediaFileLink;
use Starweb\Api\Model\ProductMediaFileLink\ProductMediaFileLinkItem;
use Starweb\Api\Operation\ProductMediaFileLink\CreateProductMediaFileLink;
use Starweb\Api\Operation\ProductMediaFileLink\DeleteProductMediaFileLink;
use Starweb\Api\Operation\ProductMediaFileLink\ListProductMediaFileLinks;
use Starweb\Api\Operation\ProductMediaFileLink\ReplaceProductMediaFileLink;
use Starweb\Api\Operation\ProductMediaFileLink\RetrieveProductMediaFileLink;
use Starweb\Api\Operation\ProductMediaFileLink\UpdateProductMediaFileLink;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductMediaFileLinkResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductMediaFileLinkCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductMediaFileLinkCollection
    {
        $response = $this->performOperation(
            new ListProductMediaFileLinks($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductMediaFileLinkCollection::class);
    }

    /**
     * @param ProductMediaFileLink $item
     *
     * @return ProductMediaFileLink
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductMediaFileLink $item): ProductMediaFileLink
    {
        $response = $this->performOperation(
            new CreateProductMediaFileLink(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductMediaFileLinkItem::class);

        return $item->getData();
    }

    /**
     * @param int $mediaFileId
     *
     * @return ProductMediaFileLink
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $mediaFileId): ProductMediaFileLink
    {
        $pathParameters = array_merge($this->getPathParameters(), ['mediaFileId' => $mediaFileId]);
        $response = $this->performOperation(
            new RetrieveProductMediaFileLink($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductMediaFileLinkItem::class);

        return $item->getData();
    }

    /**
     * @param int $mediaFileId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $mediaFileId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['mediaFileId' => $mediaFileId]);
        $response = $this->performOperation(
            new DeleteProductMediaFileLink($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $mediaFileId
     * @param ProductMediaFileLink $status
     *
     * @return ProductMediaFileLinkItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $mediaFileId, ProductMediaFileLink $status): ProductMediaFileLinkItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['mediaFileId' => $mediaFileId]);
        $response = $this->performOperation(
            new ReplaceProductMediaFileLink(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductMediaFileLinkItem::class);

        return $status->getData();
    }

    /**
     * @param int $mediaFileId
     * @param ProductMediaFileLink $status
     *
     * @return ProductMediaFileLink
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $mediaFileId, ProductMediaFileLink $status): ProductMediaFileLink
    {
        $pathParameters = array_merge($this->getPathParameters(), ['mediaFileId' => $mediaFileId]);
        $response = $this->performOperation(
            new UpdateProductMediaFileLink(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductMediaFileLinkItem::class);

        return $status->getData();
    }
}
