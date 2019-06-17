#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Http\Client\Common\Exception\ClientErrorException;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$sdk = Starweb::create($credentials, $apiBaseUri);

// get collection
$customerTagCollection = $sdk->getClient()->getCustomerTags(101);
if ($customerTagCollection !== null) {
    $customerTags = $customerTagCollection->getData();
}

// get single customer tag
$customerTagItem = $sdk->getClient()->getCustomerTag(101, 1);
if ($customerTagItem !== null) {
    $customerTag = $customerTagItem->getData();
}

// add a customer tag
try {
    $tagToAdd = new \Starweb\Api\Generated\Model\CustomerAddedTagModel();
    $tagToAdd->setTagId(3);
    $addedTag = $sdk->getClient()->addTagToCustomer(101, $tagToAdd);
} catch (ClientErrorException $exception) {
    echo $exception->getMessage();
}

// get the updated collection
$updatedTagCollection = $sdk->getClient()->getCustomerTags(101);
$updatedTags = $updatedTagCollection->getData();

// delete a tag
try {
    $deleted = $sdk->getClient()->removeTagFromCustomer(101, $addedTag->getData()->getTagId());
} catch (ClientErrorException $exception) {
    echo $exception->getMessage();
}

// get the updated collection
$updatedTagCollection = $sdk->getClient()->getCustomerTags(1);
$updatedTags = $updatedTagCollection->getData();