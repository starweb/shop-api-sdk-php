#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Model\MediaFile\MediaFileUpload;
use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Resource\Resources;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$starweb = new Starweb($credentials, $apiBaseUri);

// get a resource by its name in this case "MediaFile"
/** @var MediaFileResource $mediaFileResource */
$mediaFileResource = $starweb->resource(Resources::MEDIA_FILE);

/** @var \Starweb\Api\Model\MediaFile\MediaFileCollection $mediaFileCollection */
$mediaFileCollection = $mediaFileResource->list();

// get Media files
$files = $mediaFileCollection->getData();

// get meta (pagination) data
$metaData = $mediaFileCollection->getMeta();
$currentPage = $mediaFileCollection->getMeta()->getPagination()->getCurrentPage();

/** @var MediaFile $firstFile */
$firstFile = $mediaFileResource->retrieve(current($files)->getId());

// uploading a file
$uploadFile = new MediaFileUpload(__DIR__ . '/test.jpg');

try {
    $mediaFile = $mediaFileResource->create($uploadFile);
    var_dump($mediaFile);
} catch (\Http\Client\Common\Exception\ClientErrorException $exception) {
    var_dump($exception);
}

// delete the media file
$deleted = $mediaFileResource->delete($mediaFile->getId());

// update a media file
$updateUploadFile = new MediaFileUpload(__DIR__ . '/test.jpg');
$updatedMediaFile = $mediaFileResource->update(current($files)->getId(), $updateUploadFile);

var_dump($updatedMediaFile);