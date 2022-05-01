<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminExistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminExists()
    {
        $this->withExceptionHandling();
        Event::fake();
        $this->assertDatabaseHas('users', [
            'email' => 'admin@example.com',
        ]);
    }
}
