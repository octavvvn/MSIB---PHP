<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create(['name' => 'Fantasy', 'description' => 'Magical and imaginative worlds']);
        Genre::create(['name' => 'Science Fiction', 'description' => 'Futuristic and scientific adventures']);
        Genre::create(['name' => 'Mystery', 'description' => 'Crime-solving and suspense']);
        Genre::create(['name' => 'Horror', 'description' => 'Supernatural and fear-inducing stories']);
        Genre::create(['name' => 'Non-Fiction', 'description' => 'Based on real facts and events']);
    }
}
