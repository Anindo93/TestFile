<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegistration()
    {
        $response = $this->post('registeruser', [
            '_token' => csrf_token(),
            'first_name' => 'Shabab',
            'last_name' => 'Masiat',
            'slug' => 'shabab',
            'email' => 'admin@example.com',
            'password' => '123',
        ]);
        ob_end_flush();

        $response->assertStatus(302);
        $this->assertCount(1, User::all());
        $response->assertRedirect('/home');
    }
}
