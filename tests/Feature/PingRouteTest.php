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
    public function test_the_application_returns_a_successful_with_message_pong()
    {
        $response = $this->get('/api/ping');
        
        $this->assertEquals('pong', $response->getContent());
        $response->assertStatus(200);
    }
}
