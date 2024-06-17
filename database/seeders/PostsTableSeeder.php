<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            ['id' => 23, 'forum_id' => 18, 'user_id' => 4, 'content' => 'Post de bienvenida', 'published_at' => '2024-06-16 14:53:42', 'created_at' => '2024-06-16 14:53:42', 'updated_at' => '2024-06-16 14:54:09'],
        ]);
    }
}
