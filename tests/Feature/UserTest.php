<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_apply_form()
    {
        $response = $this->post('/pl/apply', [
            'first_name' => 'first name',
            'last_name' => 'last name',
            'email' => 'test@example.com',
            'policy' => 'true'
        ]);

        $response->assertStatus(200);
    }
}
