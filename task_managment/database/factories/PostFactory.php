<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'post_type' => $this->faker->randomElement(['data','checking','issue']),
            'post_description' => $this->faker->address,
            'status' => $this->faker->randomElement([1,0]),
        ];
    }
}
