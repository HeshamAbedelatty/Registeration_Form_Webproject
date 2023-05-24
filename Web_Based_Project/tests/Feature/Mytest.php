<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Mytest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testRegistrationFormLoads()
{
    $response = $this->get('/customers');
    $response->assertStatus(200);
}

public function testRegistrationFormValidation()
{
    $response = $this->post('/customers', [
        'name' => '',
        'email' => '',
        'password' => '',
        
    ]);

    $response->assertSessionHasErrors([
        'name' => 'The name field is required.',
        'email' => 'The email field is required.',
        'password' => 'The password field is required.',
    ]);
}

public function testDataRegistrationFormValidation()
{
    $response = $this->post('/register', [
        'name' => 'John Doe',
        'email' => 'invalid-email',
        'password' => '123',
    
    ]);

    $response->assertSessionHasErrors([
        'email' => 'The email must be a valid email address.',
        'password' => 'The password must be at least 8 characters.',
        
    ]);
}

}
