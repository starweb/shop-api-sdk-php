#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\ShopResource;
use Starweb\Api\Model\Shop\Shop;
use \Symfony\Component\Serializer\Serializer;
use \Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use \Symfony\Component\Serializer\Encoder\JsonEncoder;
use Starweb\Api\Resource\Resources;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$starweb = Starweb::create($credentials, $apiBaseUri);

// get a resource by its name in this case "Shop"
/** @var ShopResource $shopResource */
$shopResource = $starweb->resource(Resources::SHOP);

/** @var Shop $shop */
$shop = $shopResource->retrieve();

$serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
echo json_encode($serializer->normalize($shop));
