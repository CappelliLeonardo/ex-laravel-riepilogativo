<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $movie = new movie();
            // Ne riempio le colonne
            $movie->movie_name = fake()->words(rand(1, 5), true);
            $movie->director = fake()->name();
            $movie->genre = fake()->words(rand(1,2), true);
            $movie->release_year = fake()->date('Y_m_d').' '.fake()->time();
            $movie->description = fake()->text();
            // Lo salvo in persistenza
            $movie->save();
        }
    }
}
