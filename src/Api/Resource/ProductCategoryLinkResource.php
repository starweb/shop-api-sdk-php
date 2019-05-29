<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductCategoryLink\ProductCategoryLinkCollection;
use Starweb\Api\Model\ProductCategoryLink\ProductCategoryLink;
use Starweb\Api\Model\ProductCategoryLink\ProductCategoryLinkItem;
use Starweb\Api\Operation\ProductCategoryLink\CreateProductCategoryLink;
use Starweb\Api\Operation\ProductCategoryLink\DeleteProductCategoryLink;
use Starweb\Api\Operation\ProductCategoryLink\ListProductCategoryLinks;
use Starweb\Api\Operation\ProductCategoryLink\ReplaceProductCategoryLink;
use Starweb\Api\Operation\ProductCategoryLink\RetrieveProductCategoryLink;
use Starweb\Api\Operation\ProductCategoryLink\UpdateProductCategoryLink;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductCategoryLinkResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductCategoryLinkCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductCategoryLinkCollection
    {
        $response = $this->performOperation(
            new ListProductCategoryLinks($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductCategoryLinkCollection::class);
    }

    /**
     * @param ProductCategoryLink $item
     *
     * @return ProductCategoryLink
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductCategoryLink $item): ProductCategoryLink
    {
        $response = $this->performOperation(
            new CreateProductCategoryLink(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductCategoryLinkItem::class);

        return $item->getData();
    }

    /**
     * @param int $categoryId
     *
     * @return ProductCategoryLink
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $categoryId): ProductCategoryLink
    {
        $pathParameters = array_merge($this->getPathParameters(), ['categoryId' => $categoryId]);
        $response = $this->performOperation(
            new RetrieveProductCategoryLink($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductCategoryLinkItem::class);

        return $item->getData();
    }

    /**
     * @param int $categoryId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $categoryId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['categoryId' => $categoryId]);
        $response = $this->performOperation(
            new DeleteProductCategoryLink($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $categoryId
     * @param ProductCategoryLink $status
     *
     * @return ProductCategoryLinkItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $categoryId, ProductCategoryLink $status): ProductCategoryLinkItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['categoryId' => $categoryId]);
        $response = $this->performOperation(
            new ReplaceProductCategoryLink(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductCategoryLinkItem::class);

        return $status->getData();
    }

    /**
     * @param int $categoryId
     * @param ProductCategoryLink $status
     *
     * @return ProductCategoryLink
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $categoryId, ProductCategoryLink $status): ProductCategoryLink
    {
        $pathParameters = array_merge($this->getPathParameters(), ['categoryId' => $categoryId]);
        $response = $this->performOperation(
            new UpdateProductCategoryLink(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductCategoryLinkItem::class);

        return $status->getData();
    }
}
