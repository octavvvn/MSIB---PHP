<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'J.K. Rowling', 'bio' => 'Author of the Harry Potter series'],
            ['name' => 'George R.R. Martin', 'bio' => 'Author of A Song of Ice and Fire'],
            ['name' => 'J.R.R. Tolkien', 'bio' => 'Author of The Lord of the Rings'],
            ['name' => 'Suzanne Collins', 'bio' => 'Author of The Hunger Games'],
            ['name' => 'Stephen King', 'bio' => 'Author of numerous horror novels'],
        ]);
    }
}
