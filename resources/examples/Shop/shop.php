#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ShopResource;
use Starweb\Api\Model\Shop\Shop;

// create the credentials object
$credentials = new ClientCredentials('YOUR_CLIENT_ID', 'YOUR_CLIENT_SECRET');

// create the sdk object
$starweb = new Starweb($credentials, 'YOUR_API_URI');

// get a resource by its name in this case "Shop"
/** @var ShopResource $shopResource */
$shopResource = $starweb->resource('Shop');

/** @var Shop $shop */
$shop = $shopResource->retrieve();

var_dump($shop);
