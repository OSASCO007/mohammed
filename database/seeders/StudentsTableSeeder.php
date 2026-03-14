<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Ali Ahmad',
                'email' => 'ali@example.com',
                'phone' => '0591234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sara Khaled',
                'email' => 'sara@example.com',
                'phone' => '0597654321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Omar Saleh',
                'email' => 'omar@example.com',
                'phone' => '0599876543',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

