<?php

declare(strict_types=1);

namespace Starweb\Tests\HttpClient\Authentication;

use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\HttpClient\Authentication\Bearer;

class BearerTest extends TestCase
{
    public function testAuthenticateWithExistingAuthorizationHeaderOnRequestDoesNotOverrideHeader(): void
    {
        $tokenManagerMock = $this->createMock(TokenManager::class);
        $bearer = new Bearer($tokenManagerMock);
        $requestMock = $this->createMock(RequestInterface::class);
        $requestMock->expects($this->once())
                    ->method('hasHeader')
                    ->with('Authorization')
                    ->willReturn(true);

        $request = $bearer->authenticate($requestMock);

        $this->assertSame($requestMock, $request);
    }

    public function testAuthenticateAddsAuthorizationHeaderToRequest(): void
    {
        $tokenMock = $this->createMock(TokenInterface::class);
        $tokenMock->expects($this->once())
                  ->method('__toString')
                  ->willReturn('foo');

        $tokenManagerMock = $this->createMock(TokenManager::class);
        $tokenManagerMock->expects($this->once())
                         ->method('getToken')
                         ->willReturn($tokenMock);

        $bearer = new Bearer($tokenManagerMock);
        $request = new Request('GET', 'http://foo');
        $request = $bearer->authenticate($request);

        $this->assertInstanceOf(RequestInterface::class, $request);
        $this->assertTrue($request->hasHeader('Authorization'));
        $this->assertSame(['Bearer foo'], $request->getHeader('Authorization'));
    }
}
