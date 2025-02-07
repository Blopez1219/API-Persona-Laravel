<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birthdate' => fake()->dateTimeBetween('-40 years', '-20 years')->format('Y-m-d'),
            'address' => fake()->address(),
            'phone' => fake()->numerify('##########'),
        ];
    }
}
