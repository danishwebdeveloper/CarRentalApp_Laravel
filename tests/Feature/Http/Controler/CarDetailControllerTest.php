<?php

namespace Tests\Feature\Http\Controler;

use App\Models\CarDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarDetailControllerTest extends TestCase
{
    // becasue make a new database and then test ovber there
    use RefreshDatabase;

    public function test_the_cardetail_page_is_redered_properly()
    {

        $this->withoutExceptionHandling();

        // we want to create a cars
        $auto = CarDetail::factory()->create();

        // we want to hit the car url
        $response = $this->get(url('/cardetails'));

        // we want to assert that we got a status of 200
        $response->assertStatus(200);

    }
}
