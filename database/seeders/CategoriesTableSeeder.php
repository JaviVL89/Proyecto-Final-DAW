<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'DevOps', 'description' => 'Aliquid doloremque doloribus voluptatem est sapiente.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 2, 'name' => 'Backend', 'description' => 'Consequatur cumque est consequuntur aut aliquam illo.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 3, 'name' => 'UI/UX Design', 'description' => 'Numquam voluptatum ut modi totam.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 4, 'name' => 'Frontend', 'description' => 'Occaecati fuga omnis aliquid et.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 5, 'name' => 'Data Science', 'description' => 'Est sed quis dolor enim expedita aliquam.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 6, 'name' => 'Cloud Computing', 'description' => 'Atque inventore qui consectetur quae adipisci possimus cum veritatis.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 7, 'name' => 'Machine Learning', 'description' => 'Est temporibus ducimus accusamus officia quibusdam ad.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 8, 'name' => 'Full Stack', 'description' => 'Sint repudiandae tenetur est.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 9, 'name' => 'Cybersecurity', 'description' => 'Magni sit tempora amet.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
            ['id' => 10, 'name' => 'Mobile Development', 'description' => 'Ipsam soluta quod architecto veniam temporibus tenetur ipsam.', 'created_at' => '2024-06-13 20:10:11', 'updated_at' => '2024-06-13 20:10:11'],
        ]);
    }
}
