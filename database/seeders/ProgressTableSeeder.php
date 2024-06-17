<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('progress')->insert([
            ['id' => 30, 'user_id' => 4, 'course_id' => 1, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 31, 'user_id' => 4, 'course_id' => 2, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 32, 'user_id' => 4, 'course_id' => 3, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 35, 'user_id' => 4, 'course_id' => 4, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 37, 'user_id' => 4, 'course_id' => 5, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 38, 'user_id' => 4, 'course_id' => 6, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 39, 'user_id' => 4, 'course_id' => 7, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 40, 'user_id' => 4, 'course_id' => 8, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 41, 'user_id' => 4, 'course_id' => 8, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 42, 'user_id' => 4, 'course_id' => 9, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
            ['id' => 43, 'user_id' => 4, 'course_id' => 10, 'created_at' => null, 'updated_at' => null, 'status' => 'in_progress'],
        ]);
    }
}
