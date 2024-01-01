<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the login functionality.
     *
     * @return void
     */
    public function test_login()
{
    // Create a user for testing
    $user = User::factory()->create();

    // Send a POST request to the login route with incorrect user credentials
    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => '1234567', // Provide incorrect password
    ]);

    // Assert that the user is not redirected after an unsuccessful login
    $response->assertRedirect('/login'); // Update to the correct login route

    // Assert that the user is not authenticated
    $this->assertGuest();
}

}