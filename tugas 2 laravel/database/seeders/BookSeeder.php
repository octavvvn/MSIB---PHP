<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => 'Harry Potter and the Sorcerer\'s Stone', 'description' => 'The first adventure of the young wizard Harry Potter.', 'price' => 15.99, 'stock' => 10, 'cover_photo' => 'hp1.jpg', 'genre_id' => 1, 'author_id' => 1]);
        Book::create(['title' => 'A Game of Thrones', 'description' => 'Noble families fight for control over the Iron Throne of Westeros.', 'price' => 18.50, 'stock' => 8, 'cover_photo' => 'got1.jpg', 'genre_id' => 1, 'author_id' => 2]);
        Book::create(['title' => 'Murder on the Orient Express', 'description' => 'Detective Hercule Poirot solves a murder on a luxury train.', 'price' => 12.75, 'stock' => 12, 'cover_photo' => 'orient_express.jpg', 'genre_id' => 3, 'author_id' => 3]);
        Book::create(['title' => 'The Call of Cthulhu', 'description' => 'A dark tale of cosmic horror written by H.P. Lovecraft.', 'price' => 11.99, 'stock' => 9, 'cover_photo' => 'cthulhu.jpg', 'genre_id' => 4, 'author_id' => 4]);
        Book::create(['title' => 'A Brief History of Time', 'description' => 'A scientific exploration of the universe and time by Stephen Hawking.', 'price' => 14.50, 'stock' => 7, 'cover_photo' => 'history_of_time.jpg', 'genre_id' => 5, 'author_id' => 5]);
    }
}
