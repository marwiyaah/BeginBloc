<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/faq');
        $response->assertStatus(200);
        $response->assertViewIs('pages.faq');
        $response->assertViewHas('title', 'Frequently Asked Questions');
        $response->assertViewHas('faqs');
    }
}
