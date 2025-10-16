<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'genre' => 'Fantasy', 'author_id' => 1],
            ['title' => 'A Game of Thrones', 'genre' => 'Fantasy', 'author_id' => 2],
            ['title' => 'The Fellowship of the Ring', 'genre' => 'Adventure', 'author_id' => 3],
            ['title' => 'The Hunger Games', 'genre' => 'Dystopian', 'author_id' => 4],
            ['title' => 'It', 'genre' => 'Horror', 'author_id' => 5],
        ]);
    }
}
