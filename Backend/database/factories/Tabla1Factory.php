<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tabla1>
 */
class Tabla1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'position' => fake()-> realText(20),
            'description' => fake()->realText(100),
            'start_date' => fake()->date(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
