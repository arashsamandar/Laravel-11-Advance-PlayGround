<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_example(): void {
        $this->assertTrue(true);
    }

    public function test_my_api_root_books(): void {
        $response = $this->get('/books');
        $books = [];
        $response->assertStatus(200)->assertJson(compact('books'));
    }
}
