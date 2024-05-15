<?php

namespace Database\Factories;

use App\Domain\Book\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'isbn' => fake()->unique()->numerify('##########'),
            'value' => fake()->numberBetween(30, 200),
        ];
    }
}
