<?php declare(strict_types=1);

namespace Starweb\Api\Operation;

use Starweb\Api\Model\UploadFileInterface;

interface UploadFileOperation extends OperationInterface
{
    public function getUploadFile(): UploadFileInterface;
}
