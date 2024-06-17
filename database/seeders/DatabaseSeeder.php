<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            AnswersTableSeeder::class,
            CacheTableSeeder::class,
            CacheLocksTableSeeder::class,
            CategoriesTableSeeder::class,
            ForumsTableSeeder::class,
            CategoryForumTableSeeder::class,
            CommentsTableSeeder::class,
            CoursesTableSeeder::class,
            ContentsTableSeeder::class,
            PostsTableSeeder::class,
            ProgressTableSeeder::class,
            SessionsTableSeeder::class,
            TagsTableSeeder::class,
            TestResponsesTableSeeder::class,
        ]);
    }
}
