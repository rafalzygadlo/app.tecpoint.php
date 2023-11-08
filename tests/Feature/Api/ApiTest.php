<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_user_list_can_be_retrieved(): void
    {
        Sanctum::actingAs(
            User::factory()->create(),
            ['view-users']
        );
 
        $response = $this->get('/api/v1/user');
 
        $response->assertOk();
    }
}
