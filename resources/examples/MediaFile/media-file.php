#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../config.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;

// create the credentials object
$credentials = new ClientCredentials($clientId, $clientSecret);

// create the sdk object
$sdk = Starweb::create($credentials, $apiBaseUri);

// get media files
$mediaFileCollection = $sdk->getClient()->getMediaFiles();
$mediaFiles = $mediaFileCollection->getData();

// get current page via pagination meta data
$metaData = $mediaFileCollection->getMeta();
$currentPage = $metaData->getPagination()->getCurrentPage();

// get the first media file
$mediaFile = $sdk->getClient()->getMediaFile(\current($mediaFiles)->getMediaFileId());

// uploading a file
$uploadFile = new \Starweb\Api\Model\MediaFileUploadModel();
$uploadFile->setFile(file_get_contents(__DIR__ . '/test.jpg'));
$uploadFile->setFilename('foo.jpg');

try {
    $uploadedMediaFile = $sdk->getClient()->createMediaFile($uploadFile);
} catch (\Http\Client\Common\Exception\ClientErrorException $exception) {
    echo $exception->getMessage();
}

// delete the media file
$deleted = $sdk->getClient()->deleteMediaFile($uploadedMediaFile->getData()->getMediaFileId());

// replace a media file (PUT)
$putUploadFile = new \Starweb\Api\Model\MediaFileUploadModel();
$putUploadFile->setFile(file_get_contents(__DIR__ . '/test.jpg'));
$putUploadFile->setFilename('updated.jpg');

try {
    $putMediaFile = $sdk->getClient()->putMediaFile(\current($mediaFiles)->getMediaFileId(), $putUploadFile);
} catch (\Http\Client\Common\Exception\ClientErrorException $exception) {
    echo $exception->getMessage();
}

// update a media file (PATCH)
$patchUploadFile = new \Starweb\Api\Model\MediaFileUploadModel();
$patchUploadFile->setFile(file_get_contents(__DIR__ . '/test.jpg'));
$patchUploadFile->setFilename('updated.jpg');

try {
    $patchedMediaFile = $sdk->getClient()->patchMediaFile(\current($mediaFiles)->getMediaFileId(), $patchUploadFile);
} catch (\Http\Client\Common\Exception\ClientErrorException $exception) {
    echo $exception->getMessage();
}