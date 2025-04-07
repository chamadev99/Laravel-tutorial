<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_route(): void
    {
        $response = $this->get('/test');
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function test_postRequest(): void
    {
        $response = $this->post('/test-post');
        $response->assertStatus(201)
            ->assertJson(['data' => true]);
    }

    public function test_checkDataBase()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => bcrypt('password')
        ]);

        $response = $this->assertDatabaseHas('users', ['email' => 'test1@example.com']);
    }

    public function test_api()
    {
        Sanctum::actingAs(User::factory()->create());
        $response = $this->get('/api/user');
        $response->assertStatus(200);
    }

    public function test_login()
    {
        $response = $this->post('api/login', [
            'email' => 'test1@example.com',
            'password' => 'password'
        ]);

        $response->assertStatus(200);
    }
}
