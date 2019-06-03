<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Model;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Generated\Model\MediaFileUploadModel as GeneratedMediaFileUploadModel;
use Starweb\Api\Model\MediaFileUploadModel;

class MediaFileUploadModelTest extends TestCase
{
    public function testInheritance()
    {
        $model = new MediaFileUploadModel();
        $this->assertInstanceOf(GeneratedMediaFileUploadModel::class, $model);
    }

    public function testSetAndGetFilename(): void
    {
        $model = new MediaFileUploadModel();
        $model->setFilename('foo.txt');

        $this->assertSame('foo.txt', $model->getFilename());
    }
}
