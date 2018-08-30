<?php

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Client\Common\Exception\HttpClientNotFoundException;
use Http\Client\Common\Plugin\Journal;
use PHPUnit\Framework\TestCase;
use Starweb\HttpClient\Plugin\History;

class HistoryTest extends TestCase
{
    public function testConstructor()
    {
        $history = new History();

        $this->assertInstanceOf(History::class, $history);
        $this->assertInstanceOf(Journal::class, $history);
    }

    public function testGetLastResponse()
    {
        $history = new History();

        $this->assertNull($history->getLastResponse());
    }

    public function testAddSuccess()
    {
        $history = new History();

        $request = $this->createMock(Request::class);
        $response = $this->createMock(Response::class);
        $this->assertNull($history->addSuccess($request, $response));
    }

    public function testAddFailure()
    {
        $history = new History();

        $request = $this->createMock(Request::class);
        $exception = $this->createMock(HttpClientNotFoundException::class);
        $this->assertNull($history->addFailure($request, $exception));
    }
}
