<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JSONresponseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testJSONresponse(){
        $response = $this->get('/jsonreturn');
        ob_end_flush();
        $response
            ->assertStatus(302)
            ->assertJson([
                'name' => 'Shabab',
                'email'=>'shabab@gmail.com'
            ]);
    }
}
