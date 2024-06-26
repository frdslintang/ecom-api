<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'detail' => $this->faker->paragraph(),
            'price'=> $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit(),
            'discount' => $this->faker->numberBetween(2, 30)
        ];
    }
}
