<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductLanguage\ProductLanguageCollection;
use Starweb\Api\Model\ProductLanguage\ProductLanguage;
use Starweb\Api\Model\ProductLanguage\ProductLanguageItem;
use Starweb\Api\Operation\ProductLanguage\CreateProductLanguage;
use Starweb\Api\Operation\ProductLanguage\DeleteProductLanguage;
use Starweb\Api\Operation\ProductLanguage\ListProductLanguages;
use Starweb\Api\Operation\ProductLanguage\ReplaceProductLanguage;
use Starweb\Api\Operation\ProductLanguage\RetrieveProductLanguage;
use Starweb\Api\Operation\ProductLanguage\UpdateProductLanguage;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductLanguageResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductLanguageCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductLanguageCollection
    {
        $response = $this->performOperation(
            new ListProductLanguages($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductLanguageCollection::class);
    }

    /**
     * @param ProductLanguage $item
     *
     * @return ProductLanguage
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductLanguage $item): ProductLanguage
    {
        $response = $this->performOperation(
            new CreateProductLanguage(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductLanguageItem::class);

        return $item->getData();
    }

    /**
     * @param string $langCode
     *
     * @return ProductLanguage
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $langCode): ProductLanguage
    {
        $pathParameters = array_merge($this->getPathParameters(), ['langCode' => $langCode]);
        $response = $this->performOperation(
            new RetrieveProductLanguage($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductLanguageItem::class);

        return $item->getData();
    }

    /**
     * @param string $langCode
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $langCode): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['langCode' => $langCode]);
        $response = $this->performOperation(
            new DeleteProductLanguage($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param string $langCode
     * @param ProductLanguage $status
     *
     * @return ProductLanguageItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $langCode, ProductLanguage $status): ProductLanguageItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['langCode' => $langCode]);
        $response = $this->performOperation(
            new ReplaceProductLanguage(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductLanguageItem::class);

        return $status->getData();
    }

    /**
     * @param string $langCode
     * @param ProductLanguage $status
     *
     * @return ProductLanguage
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $langCode, ProductLanguage $status): ProductLanguage
    {
        $pathParameters = array_merge($this->getPathParameters(), ['langCode' => $langCode]);
        $response = $this->performOperation(
            new UpdateProductLanguage(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductLanguageItem::class);

        return $status->getData();
    }
}
