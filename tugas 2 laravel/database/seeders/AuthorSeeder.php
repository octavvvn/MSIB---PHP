<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create(['name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'British author best known for writing the Harry Potter series.']);
        Author::create(['name' => 'George R.R. Martin', 'photo' => 'george_rr_martin.jpg', 'bio' => 'American novelist and creator of A Song of Ice and Fire.']);
        Author::create(['name' => 'Agatha Christie', 'photo' => 'agatha_christie.jpg', 'bio' => 'Famous mystery writer known for Hercule Poirot and Miss Marple.']);
        Author::create(['name' => 'H.P. Lovecraft', 'photo' => 'hp_lovecraft.jpg', 'bio' => 'Pioneer of cosmic horror and weird fiction.']);
        Author::create(['name' => 'Stephen Hawking', 'photo' => 'stephen_hawking.jpg', 'bio' => 'Renowned physicist and author of A Brief History of Time.']);
    }
}
