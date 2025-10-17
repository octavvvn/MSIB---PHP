<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            ["name" => "Fantasy"],
            ["name" => "Science Fiction"],
            ["name" => "Mystery"],
            ["name" => "Romance"],
            ["name" => "Horror"],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
