<?php

namespace Starweb\Api\Operation\MediaFiles;

use Starweb\Api\Model\UploadFileInterface;
use Starweb\Api\Operation\Operation;
use Starweb\Api\Operation\UploadFileOperation;

class CreateMediaFile extends Operation implements UploadFileOperation
{
    /**
     * @var UploadFileInterface
     */
    private $uploadFile;

    public function __construct(UploadFileInterface $uploadFile, array $queryParameters = [], array $pathParameters = [], array $headers = [])
    {
        parent::__construct($queryParameters, $pathParameters, $headers);
        $this->uploadFile = $uploadFile;
    }

    public function getUploadFile(): UploadFileInterface
    {
        return $this->uploadFile;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/media-files';
    }
}
