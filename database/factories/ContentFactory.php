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
            'fr_title1' => $this->faker->word(),
            'en_title1' => $this->faker->word(),
            'nl_title1' => $this->faker->word(),
            'fr_title2' => $this->faker->word(),
            'en_title2' => $this->faker->word(),
            'nl_title2' => $this->faker->word(),
            'fr_title3' => $this->faker->word(),
            'en_title3' => $this->faker->word(),
            'nl_title3' => $this->faker->word(),
            'fr_title4' => $this->faker->word(),
            'en_title4' => $this->faker->word(),
            'nl_title4' => $this->faker->word(),
            'fr_body1' => $this->faker->word(),
            'en_body1' => $this->faker->word(),
            'nl_body1' => $this->faker->word(),
            'fr_body2' => $this->faker->word(),
            'en_body2' => $this->faker->word(),
            'nl_body2' => $this->faker->word(),
            'fr_body3' => $this->faker->word(),
            'en_body3' => $this->faker->word(),
            'nl_body3' => $this->faker->word(),
            'fr_body4' => $this->faker->word(),
            'en_body4' => $this->faker->word(),
            'nl_body4' => $this->faker->word(),
            'fr_body5' => $this->faker->word(),
            'en_body5' => $this->faker->word(),
            'nl_body5' => $this->faker->word(),
            'fr_body6' => $this->faker->word(),
            'en_body6' => $this->faker->word(),
            'nl_body6' => $this->faker->word(),
            'fr_body7' => $this->faker->word(),
            'en_body7' => $this->faker->word(),
            'nl_body7' => $this->faker->word(),

        ];
    }

   
}
