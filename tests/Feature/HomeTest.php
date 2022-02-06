<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    // This is a home test for git
    public function test_Home()
    {
        $response = $this->get('/home');
        $response->assertSeeText('Mr. Danish: +49 176 57682630');
    }

}
