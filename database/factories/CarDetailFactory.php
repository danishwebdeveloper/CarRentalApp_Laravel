<?php

namespace Database\Factories;

use App\Models\CarDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyname' => $this->faker->name(),
            'path' => $this->faker->address(),
            'title' => $this->faker->sentence(10),
            'price' => $this->faker->numberBetween(1500, 6000),
            'Kilometer' => $this->faker->randomDigit(),
            'type' => $this->faker->name(),
            'model' => $this->faker->randomDigit(4),
            'review' => $this->faker->randomDigit(),
        ];
    }
}
