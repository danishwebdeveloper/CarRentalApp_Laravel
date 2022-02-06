<?php

namespace Tests\Feature;

use App\Models\CarDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_autos_datbase()
    {
        $this->assertDatabaseHas('car_details', [
            'companyname' => 'Bantely Motors 4',
        ]);

    }

    public function test_autos_has_missing_database()
    {
        $this->assertDatabaseMissing('car_details', [
            'companyname' => 'Shuttle',
        ]);

    }
}
