<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "precio" => $this->faker->randomDigit,
            "descripcion" => $this->faker->text,
        ];
    }
}
