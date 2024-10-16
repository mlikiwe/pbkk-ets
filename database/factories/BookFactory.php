<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->isbn13(),
            'title' => fake()->sentence(5),
            'author_name' => fake()->name(),
            'genre_id' => Genre::inRandomOrder()->first()->id,
            'year_published' => fake()->year(),
            'stock' => fake()->numberBetween(20, 100)
        ];
    }
}
