#!/usr/bin/env php
<?php

require_once __DIR__.'/../../../vendor/autoload.php';

use Starweb\Starweb;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Model\MediaFile\MediaFileUploadInterface;
use Starweb\Api\Model\MediaFile\MediaFile;

// create the credentials object
//$credentials = new ClientCredentials(CLIENT_ID, CLIENT_SECRET);
$credentials = new ClientCredentials('default.test', 'lq3oy9qnd3rv25b53nkj6ibmf69j0zbo7efctqj5gvfhpue4');

// create the sdk object
$starweb = new Starweb($credentials, 'http://dev-shop.sws.local/api/v2');

// get a resource by its name in this case
/** @var MediaFileResource $mediaFileResource */
$mediaFileResource = $starweb->resource('MediaFile');

/** @var \Starweb\Api\Model\MediaFile\MediaFileCollection $mediaFileCollection */
$mediaFileCollection = $mediaFileResource->list();

// get Media files
$files = $mediaFileCollection->getData();

// get meta (pagination) data
$metaData = $mediaFileCollection->getMeta();
$currentPage = $mediaFileCollection->getMeta()->getPagination()->getCurrentPage();

/** @var MediaFile $firstFile */
$firstFile = $mediaFileResource->retrieve(current($files)->getId());


$uploadFile = new MediaFileUploadInterface(file_get_contents('http://lorempixel.com/400/200/cats'));
$mediFile = $mediaFileResource->create($uploadFile);

/** @var \Starweb\Api\Model\ProductCategory $productCategory */
$productCategory = $productCategoryResource->retrieve(first($categories)->getId());

/** @var \Starweb\Api\Model\ProductCategory $newProductCategory */
$newCategory = new \Starweb\Api\Model\ProductCategory();
$newCategory->setVisibility(true);
$newCategory->
$newProductCategory = $productCategoryResource->create();



echo $shop->getName();
