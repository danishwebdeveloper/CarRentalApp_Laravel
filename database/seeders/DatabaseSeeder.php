<?php

namespace Database\Seeders;

use App\Models\CarDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cardetail = $this->call(
            [
                CarDetailTableSeeder::class,
                UserTableSeeder::class,
            ]
        );
    }
}
