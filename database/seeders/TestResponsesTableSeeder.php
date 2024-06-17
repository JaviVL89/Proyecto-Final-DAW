<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestResponsesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('test_responses')->insert([
            ['id' => 1, 'user_id' => 4, 'question_1' => 'intermediate', 'question_2' => 'python', 'question_3' => '3-5', 'question_4' => 'hobby', 'question_5' => 'readings', 'question_6' => 'applications', 'question_7' => 'flexible', 'created_at' => '2024-06-06 16:34:01', 'updated_at' => '2024-06-06 16:34:01'],
            ['id' => 2, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '3-5', 'question_4' => 'career', 'question_5' => 'projects', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-06 16:47:18', 'updated_at' => '2024-06-06 16:47:18'],
            ['id' => 3, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '3-5', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-06 17:13:18', 'updated_at' => '2024-06-06 17:13:18'],
            ['id' => 4, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '3-5', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-06 17:16:26', 'updated_at' => '2024-06-06 17:16:26'],
            ['id' => 5, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'java', 'question_3' => '10+', 'question_4' => 'hobby', 'question_5' => 'mix', 'question_6' => 'data_science', 'question_7' => 'theoretical', 'created_at' => '2024-06-06 17:50:06', 'updated_at' => '2024-06-06 17:50:06'],
            ['id' => 6, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'python', 'question_3' => '6-10', 'question_4' => 'projects', 'question_5' => 'readings', 'question_6' => 'games', 'question_7' => 'intensive', 'created_at' => '2024-06-06 18:04:27', 'updated_at' => '2024-06-06 18:04:27'],
            ['id' => 7, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'applications', 'question_7' => 'flexible', 'created_at' => '2024-06-06 18:55:56', 'updated_at' => '2024-06-06 18:55:56'],
            ['id' => 8, 'user_id' => 4, 'question_1' => 'intermediate', 'question_2' => 'csharp', 'question_3' => '6-10', 'question_4' => 'projects', 'question_5' => 'mix', 'question_6' => 'data_science', 'question_7' => 'theoretical', 'created_at' => '2024-06-06 18:57:44', 'updated_at' => '2024-06-06 18:57:44'],
            ['id' => 9, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:15:09', 'updated_at' => '2024-06-11 06:15:09'],
            ['id' => 10, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:18:17', 'updated_at' => '2024-06-11 06:18:17'],
            ['id' => 11, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:18:57', 'updated_at' => '2024-06-11 06:18:57'],
            ['id' => 12, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:19:23', 'updated_at' => '2024-06-11 06:19:23'],
            ['id' => 13, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:19:29', 'updated_at' => '2024-06-11 06:19:29'],
            ['id' => 14, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:19:46', 'updated_at' => '2024-06-11 06:19:46'],
            ['id' => 15, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:21:08', 'updated_at' => '2024-06-11 06:21:08'],
            ['id' => 16, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-11 06:21:51', 'updated_at' => '2024-06-11 06:21:51'],
            ['id' => 17, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'python', 'question_3' => '3-5', 'question_4' => 'hobby', 'question_5' => 'readings', 'question_6' => 'applications', 'question_7' => 'flexible', 'created_at' => '2024-06-12 17:09:59', 'updated_at' => '2024-06-12 17:09:59'],
            ['id' => 18, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'python', 'question_3' => '6-10', 'question_4' => 'projects', 'question_5' => 'videos', 'question_6' => 'applications', 'question_7' => 'intensive', 'created_at' => '2024-06-13 08:16:14', 'updated_at' => '2024-06-13 08:16:14'],
            ['id' => 19, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-14 15:41:36', 'updated_at' => '2024-06-14 15:41:36'],
            ['id' => 20, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'java', 'question_3' => '10+', 'question_4' => 'projects', 'question_5' => 'mix', 'question_6' => 'games', 'question_7' => 'theoretical', 'created_at' => '2024-06-14 15:48:11', 'updated_at' => '2024-06-14 15:48:11'],
            ['id' => 21, 'user_id' => 4, 'question_1' => 'beginner', 'question_2' => 'javascript', 'question_3' => '1-2', 'question_4' => 'career', 'question_5' => 'videos', 'question_6' => 'websites', 'question_7' => 'structured', 'created_at' => '2024-06-16 14:13:43', 'updated_at' => '2024-06-16 14:13:43'],
        ]);
    }
}
