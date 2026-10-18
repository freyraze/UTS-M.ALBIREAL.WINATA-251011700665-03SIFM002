<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_halaman_tentang_dapat_dibuka(): void
    {
        $response = $this->get('/tentang');

        $response->assertStatus(200);
    }
}
