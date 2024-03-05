<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tag::create(["name" => 'Funny']);
        Tag::create(["name" => 'Epic']);
        Tag::create(["name" => 'Romantic']);
        Tag::create(["name" => 'Thrilling']);
        Tag::create(["name" => 'Suspenseful']);
    }
}
