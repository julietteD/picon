<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PcontentFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'fr_body' => $this->faker->paragraph(),
            'en_body' => $this->faker->paragraph(),
            'nl_body' => $this->faker->paragraph(),
        ];
    }

   
}
