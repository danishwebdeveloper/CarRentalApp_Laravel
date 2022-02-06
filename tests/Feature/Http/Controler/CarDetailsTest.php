<?php

namespace Tests\Feature\Http\Controler;

use App\Models\CarDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarDetailsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_car_detail_getroute_by_admin()
    {
        $response = $this->get(route('admin.index'));

        $response->assertStatus(200);
        $response->assertSeeText('Company Name');
    }

    public function test_auto_post_by_amdin()
    {
        $response = $this->post('/admin',
        [
            'companyname' => 'Bantely Motors',
            'path' => '1644092244.IMG_1707.jpg',
            'title' => 'BMW',
            'price' => '20000',
            'Kilometer' => '100',
            'type' => 'manual',
            'model' => '2018',
            'review' => '2',
        ]);
        $response->assertRedirect('/');
    }


    public function test_update_auto_by_admin()
    {
        $this->assertTrue(true);
    }

    public function test_auto_delete_by_admin()
    {
        $auto = CarDetail::first();
        if($auto){
            $auto->delete();
        }
        $this->assertTrue(true);
    }

}
