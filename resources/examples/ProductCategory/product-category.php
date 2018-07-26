#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Model\ProductCategory\ProductCategoryCollection;
use Starweb\Api\Model\ProductCategory\ProductCategoryItem;
use Starweb\Api\Model\ProductCategory\ProductCategory;
use Starweb\Api\Model\ProductLanguage\ProductCategoryLanguage;

// create the credentials object
$credentials = new ClientCredentials('YOUR_CLIENT_ID', 'YOUR_CLIENT_SECRET');

// create the sdk object
$starweb = new Starweb($credentials, 'YOUR_API_URI');

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

$foo = 'bar';

// retrieve a product category
$category = $resource->retrieve(1);

$foo = 'bar';


// replace a product category
try {
    $newCategory = new ProductCategory();
    $createdCategory = $resource->replace(2, $newCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

$foo = 'bar';

// replace a product category
try {
    $newCategory = new ProductCategory();
    $createdCategory = $resource->update(2, $newCategory);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

$foo = 'bar';


