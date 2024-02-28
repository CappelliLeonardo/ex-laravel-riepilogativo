<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        for ($i = 0; $i < 10; $i++) {

            $book = new Book();

            $book->title = fake()->name();
            $book->author = fake()->name();
            $book->genre = fake()->word();
            $book->release_year = fake()->date();
            $book->description = fake()->sentence();
            $book->save();
        }
    }
}
