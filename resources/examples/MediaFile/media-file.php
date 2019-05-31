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
$uploadFile = new \Starweb\Api\Client\Model\MediaFileUploadModel();
$uploadFile->setFileName(file_get_contents(__DIR__ . '/test.jpg'));

try {
    $uploadedMediaFile = $sdk->getClient()->createMediaFile($uploadFile);
} catch (\Http\Client\Common\Exception\ClientErrorException $exception) {
    echo $exception->getMessage();
    $body = $exception->getResponse()->getBody()->__toString();
}

// delete the media file
$deleted = $sdk->getClient()->deleteMediaFile($uploadedMediaFile->getData()->getMediaFileId());

// update a media file
$updateUploadFile = new \Starweb\Api\Client\Model\MediaFileUploadModel();
$updateUploadFile->setFile(__DIR__ . '/test.jpg');
$updatedMediaFile = $sdk->getClient()->putMediaFile(\current($files)->getId(), $updateUploadFile);

$foo = 'foo';