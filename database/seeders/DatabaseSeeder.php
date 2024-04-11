<?php

namespace Database\Seeders;

use App\Models\Model\Product;
use App\Models\Model\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(50)->create();
        Review::factory(300)->create();
    }
}
