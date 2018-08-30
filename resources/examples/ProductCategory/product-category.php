#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Model\ProductCategory\ProductCategoryCollection;
use Starweb\Api\Model\ProductCategory\ProductCategory;
use Starweb\Api\Model\ProductLanguage\ProductCategoryLanguage;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$starweb = new Starweb($credentials, $apiBaseUri);

// get a resource by its name in this case "ProductCategory"
/** @var ProductCategoryResource $resource */
$resource = $starweb->resource('ProductCategory');

// get the unfiltered collection
/** @var ProductCategoryCollection $collection */
$collection = $resource->list();

// get a collection including the languages
/** @var ProductCategoryCollection $collection */
$collection = $resource->list(['include' => 'languages']);

// create a new product category
try {
    $productCategoryLanguage = new ProductCategoryLanguage();
    $productCategoryLanguage->setName('my new category');
    $productCategoryLanguage->setLangCode('en');
    $newCategory = new ProductCategory();
    $newCategory->setVisibility('visible');
    $newCategory->setLanguages([$productCategoryLanguage]);
    $createdCategory = $resource->create($newCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// retrieve a product category
$category = $resource->retrieve(1);

// replace a product category
try {
    $productCategoryLanguage = new ProductCategoryLanguage();
    $productCategoryLanguage->setName('a replaced category');
    $productCategoryLanguage->setLangCode('sv');

    $newCategory = new ProductCategory();
    $newCategory->setLanguages([$productCategoryLanguage]);
    $newCategory->setVisibility('visible');

    $replacedCategory = $resource->replace($createdCategory->getCategoryId(), $newCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// update a product category
try {
    $updateCategory = $category;
    $updateCategory->setLanguages([$productCategoryLanguage]);
    $updateCategory->setVisibility('hidden');
    $updatedCategory = $resource->update(2, $updateCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

// delete a product category
try {
    $deleted = $resource->delete($createdCategory->getCategoryId());
} catch (Exception $exception) {
    echo $exception->getMessage();
}

$test = 'foo';