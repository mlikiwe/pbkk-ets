<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'genre_name' => 'Mystery',
                'description' => 'Crack the mystery',
            ],
            [
                'genre_name' => 'Horror',
                'description' => 'Terrifying ghost and monster',
            ],
            [
                'genre_name' => 'Thriller',
                'description' => 'Serial killer',
            ],
            [
                'genre_name' => 'Science Fiction',
                'description' => 'Fiction with science',
            ],
            [
                'genre_name' => 'Fantasy Fiction',
                'description' => 'Fiction without science, maybe?',
            ],
            [
                'genre_name' => 'Romance',
                'description' => 'Love Story',
            ],
        ]);
    }
}
