<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    function test_json_response()
    {
        $response = $this->json('GET', 'api/users/1');

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'kaka',
            ]);
    }
}
