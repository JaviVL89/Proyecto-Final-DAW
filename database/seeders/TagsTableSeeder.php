<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            ['id' => 1, 'name' => 'C#', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 2, 'name' => 'Ruby', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 3, 'name' => 'JavaScript', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 4, 'name' => 'Kotlin', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 5, 'name' => 'Go', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 6, 'name' => 'R', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 7, 'name' => 'Java', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 8, 'name' => 'Swift', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 9, 'name' => 'Python', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 10, 'name' => 'PHP', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
        ]);
    }
}
