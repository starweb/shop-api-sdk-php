#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\CustomerTagResource;
use Starweb\Api\Model\CustomerTag\CustomerTagCollection;
use Starweb\Api\Model\CustomerTag\CustomerTag;
use Http\Client\Common\Exception\ClientErrorException;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$starweb = new Starweb($credentials, $apiBaseUri);

// get a resource by its name in this case "CustomerTag"
/** @var CustomerTagResource $customerTagResource */
$customerTagResource = $starweb->resource('CustomerTag', ['customerId' => 101]);

/** @var CustomerTagCollection $customerTagCollection */
$customerTagCollection = $customerTagResource->list();

// get customer tags from collection
$tags = $customerTagCollection->getData();

try {
    // add a new tag
    $addedTag = $customerTagResource->create(1);
} catch (ClientErrorException $exception) {
    // handle exception here
    echo $exception->getMessage();
}

/** @var CustomerTagCollection $customerTagCollection */
$updatedCollection = $customerTagResource->list();
$updateTags = $updatedCollection->getData();

// get a single tag
try {
    $customerTag = $customerTagResource->retrieve(1);
} catch (ClientErrorException $exception) {
    echo $exception->getMessage();
}

// delete a tag
try {
    $deleted = $customerTagResource->delete(2);
} catch (ClientErrorException $exception) {
    echo $exception->getMessage();
}

/** @var CustomerTagCollection $customerTagCollection */
$updatedCollection = $customerTagResource->list();
$updateTags = $updatedCollection->getData();