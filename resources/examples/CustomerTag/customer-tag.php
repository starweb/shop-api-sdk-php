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

// get a single tag
try {
    $customerTag = $customerTagResource->retrieve(1);
} catch (ClientErrorException $exception) {
    echo $exception->getMessage();
}

// add a new tag
$tagToAdd = new CustomerTag();
try {
    $tagToAdd->setTagId(3);
    $addedTag = $customerTagResource->create($tagToAdd);
} catch (ClientErrorException $exception) {
    // handle exception here
    echo $exception->getMessage();
}

$tag = current($tags);

// replace a tag (update whole object via PUT)
$tag->setId(3);
$replacedTag = $customerTagResource->replace($tag);

// update a tag (pass in partial data used via PATCH)
$updatedTag = $customerTagResource->update($id, ['id' => 2]);

// delete a tag
$customerTagResource->delete($addedTag->getTagId());
