<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()-> lastName(),
            'date_of_birth' => fake()->dateTimeBetween('-400 years', '-12 years'),
            'biography' => fake()->realText($maxNbChars = 200),
            'profile_image' => "https://picsum.photos/seed/picsum/200/200",
            'website' => fake()->url()
        ];
    
    }
}
