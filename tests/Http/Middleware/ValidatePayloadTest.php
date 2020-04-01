<?php

namespace Smartosc\LaraBig\Test\Http\Middleware;

use Illuminate\Support\Facades\Request;
use Smartosc\LaraBig\Http\Middleware\ValidatePayload;
use Smartosc\LaraBig\Model\Store;
use Smartosc\LaraBig\Test\TestCase;
use Illuminate\Http\Response;

class ValidatePayloadTest extends TestCase
{
    protected $queryParams;

    protected function setUp(): void
    {
        parent::setUp();

        $this->queryParams = [
            'signed_payload' => 'eyJ1c2VyIjp7ImlkIjoxNDUzNzM3LCJlbWFpbCI6ImRldmJjQHNtYXJ0b3NjLmNvbSJ9LCJvd25lciI6eyJpZCI6MTQ1MzczNywiZW1haWwiOiJkZXZiY0BzbWFydG9zYy5jb20ifSwiY29udGV4dCI6InN0b3Jlcy9hcTAwa3NwZXhlIiwic3RvcmVfaGFzaCI6ImFxMDBrc3BleGUiLCJ0aW1lc3RhbXAiOjE1ODU3MzMyODguMjQzODc5fQ==.ZjU2ZTJiMjRiNGY2YmY5N2FlYmNmNjRlNjA4ZDUxYzdjMzZiNWVhM2U4ODczY2EwNWUwOWRmOWI5YzEwMmU2NA=='
        ];
    }


    public function testRuns() : void
    {
        Store::create([
            'store_hash' => 'aq00kspexe',
            'access_token' => '123'
        ])->save();
        Request::merge($this->queryParams);
        $result = $this->runValidatePayload();
        $this->assertTrue($result[1]);
    }

    public function testDoesNotRunForInvalidSignature() : void
    {
        Request::merge(['signed_payload' => 'signature.jsondata']);

        $result = $this->runValidatePayload();

        $this->assertFalse($result[1]);
        $this->assertEquals(Response::HTTP_NOT_ACCEPTABLE, $result[0]->status());
    }

    public function testStoreNotFound() : void
    {
        Request::merge($this->queryParams);
        $result = $this->runValidatePayload();

        $this->assertFalse($result[1]);
        $this->assertEquals(Response::HTTP_NOT_ACCEPTABLE, $result[0]->status());
    }

    private function runValidatePayload(\Closure $next = null) : array
    {
        $called = false;
        $response = ($this->app->make(ValidatePayload::class))
            ->handle(
                Request::instance(),
                function ($request) use (&$called, $next)
                {
                    $called = true;
                }
            );

        return [$response, $called];
    }
}
