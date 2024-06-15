<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class CategoryTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Deshabilitar restricciones de clave foránea
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Borrar datos existentes
        Category::truncate();
        Tag::truncate();

        // Habilitar restricciones de clave foránea
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Llenar con nuevos datos
        Category::factory(10)->create();
        Tag::factory(10)->create();
    }
}
