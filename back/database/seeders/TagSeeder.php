<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
            ['name' => 'Python'],
            ['name' => 'Java'],
            ['name' => 'C++'],
            ['name' => 'Ruby'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'Node.js'],
            ['name' => 'React'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
