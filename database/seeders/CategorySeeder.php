<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()   //5 CATEGORIES
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Category::create([
                'name' => $faker->word(),
            ]);
        }
    }
}