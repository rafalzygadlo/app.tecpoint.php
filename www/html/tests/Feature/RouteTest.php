<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoutes()
    {
        $appURL = env('APP_URL');

        $urls = [
            '/',
            '/datenschutz.html',
            'pl/index.html',
            'pl/privacy.html',
            'ro/index.html',
            'ro/privacy.html',
            'en/index.html',
            'en/privacy.html',
            'ru/index.html',
            'ru/privacy.html',
            '/home',
            '/login',
            '/user',


        ];
       
        foreach ($urls as $url) 
        {
            $response = $this->get($url);
            $response->assertStatus(200);
        }

    }
}

