<?php

namespace Starweb\Tests\HttpClient\Message;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Starweb\HttpClient\Message\EnhancedResponse;

class EnhancedResponseTest extends TestCase
{
    public function testConstructor()
    {
        $response = new EnhancedResponse($this->createMock(Response::class));

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }
}
