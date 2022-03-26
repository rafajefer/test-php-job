<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PingRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_return_text_with_message_pong()
    {
        $response = $this->get('/api/ping');
        
        $this->assertEquals('pong', $response->getContent());
        $response->assertStatus(200);
    }
}
