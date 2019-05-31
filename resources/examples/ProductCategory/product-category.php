#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$sdk = Starweb::create($credentials, $apiBaseUri);

// get all product categories
$categoryCollection = $sdk->getClient()->listProductCategories();
if ($categoryCollection !== null) {
    $categories = $categoryCollection->getData();
}

// get a collection including the languages
$categoryCollectionWithLanguages = $sdk->getClient()->listProductCategories(['include' => 'languages']);
if ($categoryCollectionWithLanguages !== null) {
    $categoriesWithLanguages = $categoryCollectionWithLanguages->getData();
}

// create a new product category
try {
    $newCategory = new \Starweb\Api\Client\Model\ProductCategoryModelUpdatable();
    $newCategory->setVisibility('visible');

    $productCategoryLanguage = new \Starweb\Api\Client\Model\ProductCategoryLanguagesModel();
    $productCategoryLanguage->setName('my new category');
    $productCategoryLanguage->setLangCode('en');
    $newCategory->setLanguages([$productCategoryLanguage]);

    $createdCategory = $sdk->getClient()->createProductCategory($newCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// retrieve a product category
$categoryItem = $sdk->getClient()->getProductCategory($createdCategory->getData()->getCategoryId());
if ($categoryItem !== null) {
    $category = $categoryItem->getData();
}

// replace a product category (PUT)
try {
    $replaceRequestBody = new \Starweb\Api\Client\Model\ProductCategoryModelUpdatable();
    $replaceRequestBody->setVisibility('hidden');

    $productCategoryLanguage = new \Starweb\Api\Client\Model\ProductCategoryLanguagesModel();
    $productCategoryLanguage->setName('my replaced category');
    $productCategoryLanguage->setLangCode('en');
    $replaceRequestBody->setLanguages([$productCategoryLanguage]);

    $replacedCategory = $sdk->getClient()->putProductCategory($createdCategory->getData()->getCategoryId(), $replaceRequestBody);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// update a product category (PATCH)
try {
    $replaceRequestBody = new \Starweb\Api\Client\Model\ProductCategoryModelUpdatable();
    $replaceRequestBody->setVisibility('pricelists');

    $replacedCategory = $sdk->getClient()->patchProductCategory($createdCategory->getData()->getCategoryId(), $replaceRequestBody);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// delete a product category
try {
    $deleted = $sdk->getClient()->deleteProductCategory($createdCategory->getData()->getCategoryId());
} catch (Exception $exception) {
    echo $exception->getMessage();
}

$test = 'foo';