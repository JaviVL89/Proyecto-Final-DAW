<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateContentsFilePathSeeder extends Seeder
{
    public function run()
    {
        $mappings = [
            'uploads/courses/HTML5_Introduccion.pptx' => 'uploads/courses/HTML5_Introduccion.pdf',
            'uploads/courses/JavaScript_Introduccion.pptx' => 'uploads/courses/JavaScript_Introduccion.pdf',
            'uploads/courses/Java_SpringBoot_Introduccion.pptx' => 'uploads/courses/Java_SpringBoot_Introduccion.pdf',
            'uploads/courses/Data_Science_Introduccion.pptx' => 'uploads/courses/Data_Science_Introduccion.pdf',
            'uploads/courses/Desarrollo_Web_Introduccion.pptx' => 'uploads/courses/Desarrollo_Web_Introduccion.pdf',
            'uploads/courses/Ciberseguridad_Introduccion.pptx' => 'uploads/courses/Ciberseguridad_Introduccion.pdf',
            'uploads/courses/Blockchain_Introduccion.pptx' => 'uploads/courses/Blockchain_Introduccion.pdf',
        ];

        foreach ($mappings as $oldPath => $newPath) {
            DB::table('contents')
                ->where('file_path', $oldPath)
                ->update(['file_path' => $newPath]);
        }
    }
}
