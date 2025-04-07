<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
use Laravel\Sanctum\Sanctum;

class ExampleTest extends TestCase
{
    use RefreshDatabase;



    public function test_task_validation(): void
    {
        $task = [
            'title' => '',
            'description' => 'Test Description',
            'status' => 'pending',
        ];
        $response = $this->post('/api/tasks', $task);
        $response->assertStatus(422);
    }

    public function test_create(): void
    {
        $task = [
            'title' => 'Task new final',
            'description' => 'Test Description',
            'status' => 'pending',
        ];
        $response = $this->post('/api/tasks', $task);
        $response->assertStatus(200);
        $response->assertJson(['data' => $task]);

        $task = Task::latest()->latest()->first();
        $this->assertDatabaseHas('tasks', ['title' => 'Task new final']);

        $this->assertEquals('Task new final', $task->title);
    }


    public function test_get_user(): void
    {

        $user = User::factory()->create();
        $response = $this->get('/api/all-user');

        $response->assertStatus(422);
        $response->assertStatus(200);


        // Decode the JSON response
        $data = $response->json();

        dd($data);
    }


    public function test_the_application_returns_a_successful_response(): void
    {

        Sanctum::actingAs(User::factory()->create());
        $response = $this->getJson('/api/tasks');
        $response->assertJson(['message' => 'success']);

        //$response->assertStatus(200);
    }

    public function test_delete(): void
    {
        $task = Task::find(2);

        $response = $this->delete('api/tasks/' . $task->id);
        $response->assetStatus(200);
        $this->assertDatabaseMissing('tasks', $task);
    }

    public function test_the_application_returns_a_contain_response(): void
    {
        $response = $this->get('/api/tasks');
        $response->assertSee('data');

        $response->assertStatus(200);
    }

    public function test_tdd(): void
    {
        $response = $this->get('/profile');
        $response->assertStatus((302));
        $response->assertRedirect('/login');
    }

    public function test_after_login(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/login', [
            'email' => $user->email,
            'password' => $user->password
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
    }

    public function test_profile_tdd(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get('/dashboard')
            ->assertStatus(302)
            ->assertRedirect('/profile');

        // Follow the redirect and test the content of the final destination
        $response = $this->get('/profile');
        $response->assertStatus(200);
        $response->assertSee('Laravel has wonderful');
    }
}
