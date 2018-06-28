#!/usr/bin/env php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ShopResource;
use Starweb\Api\Resource\ProductCategoryResource;


// create the credentials object
//$credentials = new ClientCredentials(CLIENT_ID, CLIENT_SECRET);
$credentials = new ClientCredentials('default.test', 'lq3oy9qnd3rv25b53nkj6ibmf69j0zbo7efctqj5gvfhpue4');

// create the sdk object
$starweb = new Starweb($credentials, 'http://dev-shop.sws.local/api/v2');

// get a resource by its name in this case
/** @var ShopResource $shopResource */
$shopResource = $starweb->resource('Shop');

/** @var \Starweb\Api\Model\Shop $shop */
$shop = $shopResource->retrieve();

echo $shop->getName();

/** @var ProductCategoryResource $productCategoryResource */
$productCategoryResource = $starweb->resource('ProductCategory');
$categories = $productCategoryResource->all();

/** @var \Starweb\Api\Model\ProductCategory $productCategory */
$productCategory = $productCategoryResource->show(first($categories)->getId());

echo $shop->getName();
