<?php

namespace Tests\Feature\Api\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example_user_can_login_with_email_and_password()
    {
       $this->postJson(route('api.login'),
       [
        'email' => 'demo@demo.com',
        'password' => 'demo'
       ])
       ->assertOk()
       ->json();
    }
}
