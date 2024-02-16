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
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'language' => $this->faker->languageCode(),
            'email' => fake()->unique()->safeEmail(),
            'birthdate' => $this->faker->date(),
            'ipaddress' => $this->faker->localIpv4(),
            'marketing' => $this->faker->boolean(),
            'newsletter' => $this->faker->boolean(),
            'question' => $this->faker->word(),
            'persons' => $this->faker->word(),
        ];
    }

 
}
