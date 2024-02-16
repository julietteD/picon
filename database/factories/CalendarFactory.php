<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CalendarFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'location' => $this->faker->word(),
            'city' => $this->faker->word(),
            'dateConcert' => $this->faker->word(),
            'orderElt' => $this->faker->randomDigit(),
            'link' => $this->faker->url(),
        ];
    }

   
}
