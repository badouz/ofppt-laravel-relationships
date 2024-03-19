<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(["name" => 'Action']);
        Category::create(["name" => 'Comedy']);
        Category::create(["name" => 'Drama']);
        Category::create(["name" => 'Science Fiction']);
        Category::create(["name" => 'Adventure']);
    }
}
