<?php declare(strict_types=1);

namespace Starweb\Api\Model;

interface UploadFileInterface
{
    public function getContent(): string;

    public function getFilename(): string;

    public function getExtension(): string;

    public function getMimeType(): string;
}
