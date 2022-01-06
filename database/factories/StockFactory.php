<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'price' => $this->faker->randomFloat(null, 100, 300),
            'rate' => mt_rand(1, 70),
            'rate_percent' => mt_rand(2, 98),
        ];
    }
}
