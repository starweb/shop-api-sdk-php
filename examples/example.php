#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ShopResource;

// create the credentials object
$credentials = new ClientCredentials(CLIENT_ID, CLIENT_SECRET);

// create the sdk object
$starweb = new Starweb($credentials, 'http://dev-shop.sws.local/api/v2');

// get a resource by its name in this case
/** @var ShopResource $shopResource */
$shopResource = $starweb->resource('shop');
$response = $shopResource->show();

/** @var ShopResource $shopResource */
$shopResource = $starweb->resource('shop');

/** @var \Starweb\Api\Model\Shop $shop */
$shop = $shopResource->show();

echo $shop->getName();
