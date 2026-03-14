<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Laravel Basics',
                'author' => 'Ahmed Ali',
                'year_published' => 2020,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PHP for Beginners',
                'author' => 'Sara Hassan',
                'year_published' => 2018,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mastering Vue.js',
                'author' => 'Omar Saleh',
                'year_published' => 2022,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
