<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function () {
                return Product::all()->random()->id;
            },
            'customer' => $this->faker->name,
            'review' => $this->faker->paragraph(),
            'star' => $this->faker->numberBetween(0, 5),
        ];
    }
}
