<?php

namespace Database\Factories;

use App\Domain\Store\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Store>
 */
class StoreFactory extends Factory
{
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName()."'s Store",
            'address' => fake()->address(),
            'active' => fake()->boolean(),
        ];
    }
}
