<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_view_all_threads()
    {
        $thread = Thread::factory()->create();
        $response = $this->get('/threads');
        $response->assertStatus(200);
        $response->assertSee($thread->title);
    }

    public function test_user_can_view_a_single_thread()
    {
        $thread = Thread::factory()->create();
        $response = $this->get('/threads/' . $thread->id);
        $response->assertStatus(200);
        $response->assertSee($thread->title);
    }
}
