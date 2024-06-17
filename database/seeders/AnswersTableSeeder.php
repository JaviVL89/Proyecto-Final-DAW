<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('answers')->insert([
            // No hay datos en el dump para la tabla `answers`
        ]);
    }
}
