<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_ref' => $this->faker->unique()->randomNumber(),
            'customer_name' => $this->faker->name,
        ];
    }
}
