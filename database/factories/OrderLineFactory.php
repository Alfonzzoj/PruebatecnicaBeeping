<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 20),
            'qty' => $this->faker->numberBetween(1, 10),
            'product_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
