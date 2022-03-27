<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MovementControllerTest extends TestCase
{
    public function test_the_application_returns_a_successful_response_when_call_ranking()
    {
        $response = $this->getJson('/api/movement/1/ranking');
        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Ranking retrieved successfully!'
            ]);
    }
}
