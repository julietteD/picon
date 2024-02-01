<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ParticipationFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'language' => $this->faker->text($maxNbChars = 30),
            'email' => fake()->unique()->safeEmail(),
            'birthdate' => $this->faker->text($maxNbChars = 30),
            'ipaddress' => $this->faker->text($maxNbChars = 30),
            'city' => $this->faker->city(),
            'origin' => $this->faker->text($maxNbChars = 30)
        ];
    }

 
}
