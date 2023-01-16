<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KontrakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'durasi' => $this->faker->text(50),
            'gaji' => $this->faker->text(50)
        ];
    }
}
