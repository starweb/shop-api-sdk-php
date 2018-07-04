<?php

namespace Starweb\Api\Model\MediaFile;

use Starweb\Api\Model\UploadFileInterface;

class MediaFileUploadInterface implements UploadFileInterface
{
    /**
     * @var string
     */
    protected $file;

    /**
     * MediaFileUpload constructor.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getContent(): string
    {
        return $this->file;
    }
}