#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Api\Client\Client;
use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$sdk = Starweb::create($credentials, $apiBaseUri);

// get namespaced shop item (data) and shop model
/** @var \Starweb\Api\Client\Model\ShopItem $shopItem */
$shopItem = $sdk->getClient()->getShop();

/** @var \Starweb\Api\Client\Model\ShopModel $shopModel */
$shop = $shopItem->getData();

// get the plain response and body
$response = $sdk->getClient()->getShop(Client::FETCH_RESPONSE);
$body = $response->getBody()->__toString();
$payload = \json_decode($response->getBody()->__toString(), true);

$foo = 'bar';