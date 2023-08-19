<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'flowering',
        ]);
        Category::create([
            'category_name' => 'non-flowering',
        ]);
        Category::create([
            'category_name' => 'indoor',
        ]);
        Category::create([
            'category_name' => 'outdoor',
        ]);
        Category::create([
            'category_name' => 'succulant',
        ]);
    }
}
