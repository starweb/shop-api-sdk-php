<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Endpoint;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\StreamInterface;
use Starweb\Api\Endpoint\MediaFileEndpointTrait;
use Starweb\Api\Model\MediaFileUploadModel;
use Symfony\Component\Serializer\Serializer;

class MediaFileEndpointTraitTest extends TestCase
{
    public function testGetBodyTrait(): void
    {
        $mediaFileUploadModelMock = $this->createMock(MediaFileUploadModel::class);
        $mediaFileUploadModelMock
            ->expects($this->once())
            ->method('getFilename')
            ->willReturn('foo.jpg');

        $endpoint = $this->getEndpoint($mediaFileUploadModelMock);

        $serializerMock = $this->createMock(Serializer::class);
        $serializerMock
            ->expects($this->once())
            ->method('normalize')
            ->with($mediaFileUploadModelMock, 'json')
            ->willReturn(['file' => 'foo']);
        [$bodyHeaders, $body] = $endpoint->getBody($serializerMock);

        $this->assertIsArray($bodyHeaders);
        $this->assertArrayHasKey('Content-Type', $bodyHeaders);
        $this->assertIsArray($bodyHeaders['Content-Type']);
        $this->assertStringStartsWith('multipart/form-data; boundary="', \current($bodyHeaders['Content-Type']));
        $this->assertInstanceOf(StreamInterface::class, $body);
        $this->assertStringContainsString(
            'Content-Disposition: form-data; name="file"; filename="foo.jpg"',
            $body->__toString()
        );
    }

    public function testGetBodyTraitForNotSupportedModelShouldReturnEmptyArrayParts(): void
    {
        $endpoint = $this->getEndpoint('foo');
        $serializerMock = $this->createMock(Serializer::class);
        [$bodyHeaders, $body] = $endpoint->getBody($serializerMock);

        $this->assertSame([], $bodyHeaders);
        $this->assertNull($body);
    }

    private function getEndpoint($body)
    {
        $endpoint = new class ($body)
        {
            private $body;

            public function __construct($body)
            {
                $this->body = $body;
            }

            use MediaFileEndpointTrait;
        };

        return $endpoint;
    }
}
