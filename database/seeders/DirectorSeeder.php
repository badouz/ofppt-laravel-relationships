<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Director::create([
            "name" => 'Christopher Nolan',
            "bio" => "Christopher Edward Nolan CBE (born 30 July 1970) is a British and American filmmaker. Known for his Hollywood blockbusters with complex storytelling, Nolan is considered a leading filmmaker of the 21st century. He has received many accolades and his films have grossed more than $6 billion worldwide, ranking him among the highest-grossing directors. In 2015, he was listed as one of the 100 most influential people in the world by Time, and in 2024, he was honoured with the British Film Institute Fellowship."
    ]);
    Director::create([
        "name" => 'Quentin Tarantino',
        "bio" => "Quentin Jerome Tarantino (/ˌtærənˈtiːnoʊ/; born March 27, 1963) is an American film director, screenwriter, and actor. His films are characterized by stylized violence, extended dialogue including a pervasive use of profanity, and references to popular culture."
]);
    }
}
