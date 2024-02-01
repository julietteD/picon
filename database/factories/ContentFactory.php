<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ContentFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->text($maxNbChars = 30),
            'body1' => $this->faker->text($maxNbChars = 30),
        ];
    }

   
}
