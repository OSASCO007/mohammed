<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loans')->insert([
            [
                'book_id' => 1,
                'student_id' => 1,
                'loan_date' => '2026-01-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 2,
                'student_id' => 2,
                'loan_date' => '2026-01-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_id' => 3,
                'student_id' => 3,
                'loan_date' => '2026-01-25',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
