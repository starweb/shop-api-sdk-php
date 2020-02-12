<?php

declare(strict_types=1);

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Psr7\Uri;
use PHPUnit\Framework\TestCase;
use Starweb\HttpClient\Plugin\AddPathPlugin;

class AddPathPluginTest extends TestCase
{
    public function testCallConstructorWithEmptyUriPathThrowsException(): void
    {
        $uriMock = $this->createMock(Uri::class);
        $uriMock->expects($this->once())
                ->method('getPath')
                ->willReturn('');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('URI path cannot be empty');
        new AddPathPlugin($uriMock);
    }

    public function testCallConstructorWithUriStartingWithSlashRemovesTrailingSlash(): void
    {
        $uriMock = $this->createMock(Uri::class);
        $uriMock->expects($this->exactly(3))
                ->method('getPath')
                ->willReturn('/foo/');
        $uriMock->expects($this->once())
                ->method('withPath')
                ->with('/foo')
                ->willReturn('foo');

        new AddPathPlugin($uriMock);
    }
}
