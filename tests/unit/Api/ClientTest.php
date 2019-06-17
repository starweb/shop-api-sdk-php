<?php declare(strict_types=1);

namespace Starweb\Tests\Api;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Client;
use Starweb\Api\Generated\Model\MediaFileUploadModel as GeneratedMediaFileUploadModel;
use Starweb\Api\Model\MediaFileUploadModel;
use Symfony\Component\Serializer\Serializer;

class ClientTest extends TestCase
{
    public function testExtendingGeneratedClient(): void
    {
        $client = $this->getClient();

        $this->assertInstanceOf(\Starweb\Api\Generated\Client::class, $client);
    }

    public function testCreateMediaFile(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(MediaFileUploadModel::class);

        $this->assertSame(null, $client->createMediaFile($mediaFileUploadModelMock));
    }

    public function testCreateMediaFileWithGeneratedModelThrowsException(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(GeneratedMediaFileUploadModel::class);

        $this->expectException(\LogicException::class);
        $client->createMediaFile($mediaFileUploadModelMock);
    }

    public function testPutMediaFile(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(MediaFileUploadModel::class);

        $this->assertSame(null, $client->putMediaFile(1, $mediaFileUploadModelMock));
    }

    public function testPutMediaFileWithGeneratedModelThrowsException(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(GeneratedMediaFileUploadModel::class);

        $this->expectException(\LogicException::class);
        $client->putMediaFile(1, $mediaFileUploadModelMock);
    }

    public function testPatchMediaFile(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(MediaFileUploadModel::class);

        $this->assertSame(null, $client->patchMediaFile(1, $mediaFileUploadModelMock));
    }

    public function testPatchMediaFileWithGeneratedModelThrowsException(): void
    {
        $client = $this->getClient();
        $mediaFileUploadModelMock = $this->createMock(GeneratedMediaFileUploadModel::class);

        $this->expectException(\LogicException::class);
        $client->patchMediaFile(1, $mediaFileUploadModelMock);
    }

    private function getClient(): Client
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock
            ->method('getStatusCode')
            ->willReturn(200);

        $httpClientMock = $this->createMock(HttpClient::class);
        $httpClientMock
            ->method('sendRequest')
            ->willReturn($responseMock);

        $requestMock = $this->createMock(RequestInterface::class);
        $messageFactoryMock = $this->createMock(MessageFactory::class);
        $messageFactoryMock
            ->method('createRequest')
            ->willReturn($requestMock);

        $serializerMock = $this->createMock(Serializer::class);
        $serializerMock
            ->method('normalize')
            ->willReturn([]);

        return new Client($httpClientMock, $messageFactoryMock, $serializerMock);
    }
}
