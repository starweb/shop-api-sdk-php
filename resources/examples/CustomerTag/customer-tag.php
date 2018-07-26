#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\CustomerTagResource;
use Starweb\Api\Model\CustomerTag\CustomerTagCollection;
use Starweb\Api\Model\CustomerTag\CustomerTag;
use Http\Client\Common\Exception\ClientErrorException;

// create the credentials object
$credentials = new ClientCredentials('CLIENT_ID', 'CLIENT_SECRET');

// create the sdk object
$starweb = new Starweb($credentials, 'YOUR_API_URI');

// get a resource by its name in this case "CustomerTag"
/** @var CustomerTagResource $customerTagResource */
$customerTagResource = $starweb->resource('CustomerTag', ['customerId' => 101]);

/** @var CustomerTagCollection $customerTagCollection */
$customerTagCollection = $customerTagResource->list();

// get customer tags from collection
$tags = $customerTagCollection->getData();

try {
    // add a new tag
    $newTag = new CustomerTag();
    $newTag->setTagId(2);
    $addedTag = $customerTagResource->create($newTag);
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

// replace a tag (update whole object via PUT)
$replaceTag = new CustomerTag();
$replaceTag->setTagId(2);
$replacedTag = $customerTagResource->replace(3, $replaceTag);

/** @var CustomerTagCollection $customerTagCollection */
$updatedCollection = $customerTagResource->list();
$updateTags = $updatedCollection->getData();

// update a tag (pass in partial data used via PATCH)
$replaceTag->setTagId(3);
$updatedTag = $customerTagResource->update(2, $replaceTag);

/** @var CustomerTagCollection $customerTagCollection */
$updatedCollection = $customerTagResource->list();
$updateTags = $updatedCollection->getData();