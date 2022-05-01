<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSession()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/catalog-view');
        ob_end_flush();
        $response->assertStatus(500);
    }
}
