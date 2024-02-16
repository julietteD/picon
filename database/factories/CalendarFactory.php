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
            'fr_city' => $this->faker->word(),
            'fr_dateConcert' => $this->faker->word(),
            'orderElt' => $this->faker->randomDigit(),
            'link' => $this->faker->url(),
        ];
    }

   
}
