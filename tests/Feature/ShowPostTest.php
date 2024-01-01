<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User; // Add this line to import the User model

class ShowPostTest extends TestCase
{
    use RefreshDatabase; // Ensure the database is refreshed between tests

    /**
     * Test the show function in PostController.
     *
     * @return void
     */
    public function test_show_function()
    {
        // Create a user for testing
        $user = User::factory()->create();

        // Create a post for testing associated with the user
        $post = Post::factory()->create(['user_id' => $user->id]);

        // Send a GET request to the show route with the post ID
        $response = $this->get("/posts/show/{$post->id}");

        // Assert that the response has a 200 status code
        $response->assertStatus(200);

        // Assert that the returned view is 'posts.show'
        $response->assertViewIs('posts.show');

        // Assert that the view has the 'post' variable
        $response->assertViewHas('post', $post);
    }
}
