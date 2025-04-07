<?php

namespace Tests\Feature;

use App\Events\UserRegister;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserEventTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp(); // ✅ Boots Laravel's Application
    }

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        Event::fake();
        $user = User::factory()->create();

        event(new UserRegister($user));

        Event::assertDispatched(UserRegister::class);
    }
}
