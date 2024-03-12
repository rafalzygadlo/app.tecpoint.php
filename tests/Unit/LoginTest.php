<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
    public function test_user_can_login()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertStatus(200);
        
    }
}
