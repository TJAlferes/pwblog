<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
    public function test_http_get_request()
    {
        $client = new Client();
        $res = $client->get('');

        $this->assertEquals(200, $res->getStatusCode());
    }
}
