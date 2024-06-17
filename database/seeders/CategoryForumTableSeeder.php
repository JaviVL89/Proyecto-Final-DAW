<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryForumTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_forum')->insert([
            ['id' => 16, 'category_id' => 1, 'forum_id' => 18, 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
