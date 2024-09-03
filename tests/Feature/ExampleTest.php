<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_my_api_root_books(): void {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
