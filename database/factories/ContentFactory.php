<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContentFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'fr_title' => $this->faker->sentence(),
            'fr_body1' => $this->faker->paragraph(2),
            'en_title' => $this->faker->sentence(),
            'en_body1' => $this->faker->paragraph(2),
            'nl_title' => $this->faker->sentence(),
            'nl_body1' => $this->faker->paragraph(2),
        ];
    }

   
}
